<?php

namespace App\Controllers\Admin;

use App\Models\RoleModel;
use App\Models\UserModel;

class Users extends BaseAdminController
{
    protected UserModel $userModel;
    protected RoleModel $roleModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        if (! $this->can('users.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $search = $this->request->getGet('search');
        $model  = $this->userModel;

        if ($search) {
            $model = $model->like('name', $search)->orLike('email', $search);
        }

        $users = $model->paginate(10);
        foreach ($users as &$user) {
            $user['roles'] = $this->userModel->getRoles((int) $user['id']);
        }
        unset($user);

        return $this->render('admin/users/index', [
            'title'    => 'Users',
            'users'    => $users,
            'pager'    => $this->userModel->pager,
            'search'   => $search,
        ]);
    }

    public function create()
    {
        if (! $this->can('users.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        return $this->render('admin/users/create', [
            'title' => 'Create User',
            'roles' => $this->roleModel->findAll(),
        ]);
    }

    public function store()
    {
        if (! $this->can('users.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $rules = [
            'name'     => 'required|min_length[3]|max_length[100]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'status'   => 'required|in_list[active,inactive]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->userModel->hashPassword($this->request->getPost('password')),
            'status'   => $this->request->getPost('status'),
        ];

        $userId = $this->userModel->insert($data);

        $this->syncRoles((int) $userId, $this->request->getPost('roles') ?? []);

        return redirect()->to('/admin/users')->with('success', 'User berhasil dibuat.');
    }

    public function edit(int $id)
    {
        if (! $this->can('users.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $user = $this->userModel->find($id);
        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $assigned = $this->userModel->getRoles($id);
        $assignedIds = array_column($assigned, 'id');

        return $this->render('admin/users/edit', [
            'title'        => 'Edit User',
            'user'         => $user,
            'roles'        => $this->roleModel->findAll(),
            'assigned_ids' => $assignedIds,
        ]);
    }

    public function update(int $id)
    {
        if (! $this->can('users.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $user = $this->userModel->find($id);
        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $rules = [
            'name'   => 'required|min_length[3]|max_length[100]',
            'email'  => "required|valid_email|is_unique[users.email,id,{$id}]",
            'status' => 'required|in_list[active,inactive]',
        ];

        $password = $this->request->getPost('password');
        if (! empty($password)) {
            $rules['password'] = 'min_length[8]';
        }

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'status' => $this->request->getPost('status'),
        ];

        if (! empty($password)) {
            $data['password'] = $this->userModel->hashPassword($password);
        }

        $this->userModel->update($id, $data);
        $this->syncRoles($id, $this->request->getPost('roles') ?? []);

        return redirect()->to('/admin/users')->with('success', 'User berhasil diperbarui.');
    }

    public function delete(int $id)
    {
        if (! $this->can('users.delete')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        if ($id === current_user_id()) {
            return redirect()->back()->with('error', 'Anda tidak dapat menghapus akun sendiri.');
        }

        $this->userModel->delete($id);

        return redirect()->to('/admin/users')->with('success', 'User berhasil dihapus.');
    }

    public function toggleStatus(int $id)
    {
        if (! $this->can('users.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $user = $this->userModel->find($id);
        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $newStatus = ($user['status'] === UserModel::STATUS_ACTIVE)
            ? UserModel::STATUS_INACTIVE
            : UserModel::STATUS_ACTIVE;

        $this->userModel->update($id, ['status' => $newStatus]);

        return redirect()->back()->with('success', 'Status user diperbarui.');
    }

    public function resetPassword(int $id)
    {
        if (! $this->can('users.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $user = $this->userModel->find($id);
        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $rules = ['password' => 'required|min_length[8]'];
        if (! $this->validate($rules)) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $this->userModel->update($id, [
            'password' => $this->userModel->hashPassword($this->request->getPost('password')),
        ]);

        return redirect()->back()->with('success', 'Password user berhasil direset.');
    }

    /**
     * Sinkronisasi role milik user (user_roles).
     */
    private function syncRoles(int $userId, array $roleIds): void
    {
        $db = \Config\Database::connect();
        $db->table('user_roles')->where('user_id', $userId)->delete();

        $rows = [];
        foreach ($roleIds as $roleId) {
            $rows[] = ['user_id' => $userId, 'role_id' => (int) $roleId];
        }
        if (! empty($rows)) {
            $db->table('user_roles')->insertBatch($rows);
        }
    }
}
