<?php

namespace App\Controllers\Admin;

use App\Models\PermissionModel;
use App\Models\RoleModel;

class Roles extends BaseAdminController
{
    protected RoleModel $roleModel;
    protected PermissionModel $permissionModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->roleModel       = new RoleModel();
        $this->permissionModel = new PermissionModel();
    }

    public function index()
    {
        if (! $this->can('roles.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $roles = $this->roleModel->findAll();
        foreach ($roles as &$role) {
            $role['user_count'] = $this->roleModel->getUserCount((int) $role['id']);
        }
        unset($role);

        return $this->render('admin/roles/index', [
            'title' => 'Roles',
            'roles' => $roles,
        ]);
    }

    public function create()
    {
        if (! $this->can('roles.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        return $this->render('admin/roles/create', [
            'title' => 'Create Role',
        ]);
    }

    public function store()
    {
        if (! $this->can('roles.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[100]',
            'slug'        => 'required|alpha_dash|max_length[100]|is_unique[roles.slug]',
            'description' => 'permit_empty|max_length[1000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->roleModel->insert([
            'name'        => $this->request->getPost('name'),
            'slug'        => $this->request->getPost('slug'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/roles')->with('success', 'Role berhasil dibuat.');
    }

    public function edit(int $id)
    {
        if (! $this->can('roles.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $role = $this->roleModel->find($id);
        if (! $role) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        return $this->render('admin/roles/edit', [
            'title' => 'Edit Role',
            'role'  => $role,
        ]);
    }

    public function update(int $id)
    {
        if (! $this->can('roles.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $role = $this->roleModel->find($id);
        if (! $role) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[100]',
            'slug'        => "required|alpha_dash|max_length[100]|is_unique[roles.slug,id,{$id}]",
            'description' => 'permit_empty|max_length[1000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->roleModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'slug'        => $this->request->getPost('slug'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/admin/roles')->with('success', 'Role berhasil diperbarui.');
    }

    public function delete(int $id)
    {
        if (! $this->can('roles.delete')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $this->roleModel->delete($id);

        return redirect()->to('/admin/roles')->with('success', 'Role berhasil dihapus.');
    }

    public function permissions(int $id)
    {
        if (! $this->can('roles.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $role = $this->roleModel->find($id);
        if (! $role) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $assigned  = $this->roleModel->getPermissions($id);
        $assignedIds = array_column($assigned, 'id');
        $grouped   = $this->permissionModel->getGrouped();

        return $this->render('admin/roles/permissions', [
            'title'        => 'Role Permissions',
            'role'         => $role,
            'grouped'      => $grouped,
            'assigned_ids' => $assignedIds,
        ]);
    }

    public function savePermissions(int $id)
    {
        if (! $this->can('roles.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $role = $this->roleModel->find($id);
        if (! $role) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $permissionIds = $this->request->getPost('permissions') ?? [];

        $db = \Config\Database::connect();
        $db->table('role_permissions')->where('role_id', $id)->delete();

        $rows = [];
        foreach ($permissionIds as $pid) {
            $rows[] = ['role_id' => $id, 'permission_id' => (int) $pid];
        }
        if (! empty($rows)) {
            $db->table('role_permissions')->insertBatch($rows);
        }

        // Refresh permission session user yang sedang login bila terdampak.
        if ($this->roleModel->getUserCount($id) > 0 && $this->currentUser) {
            $perms = $this->userModel->getPermissions((int) $this->currentUser['id']);
            session()->set('permissions', array_column($perms, 'slug'));
            $this->permissions = array_column($perms, 'slug');
        }

        return redirect()->to('/admin/roles')->with('success', 'Permission role berhasil disimpan.');
    }
}
