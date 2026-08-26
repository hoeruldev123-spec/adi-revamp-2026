<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $helpers = ['form', 'url'];
    protected UserModel $userModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->userModel = new UserModel();
    }

    public function login()
    {
        if (session('authenticated')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('admin/auth/login', [
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function authenticate()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if (! $user || ! $this->userModel->verifyPassword($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Email atau password salah.');
        }

        if (($user['status'] ?? '') !== UserModel::STATUS_ACTIVE) {
            return redirect()->back()->withInput()->with('error', 'Akun tidak aktif. Hubungi administrator.');
        }

        $perms = $this->userModel->getPermissions((int) $user['id']);
        $session = session();
        $session->regenerate();
        $session->set([
            'user_id'      => $user['id'],
            'user_name'    => $user['name'],
            'user_email'   => $user['email'],
            'authenticated' => true,
            'permissions'  => array_column($perms, 'slug'),
        ]);

        return redirect()->to('/admin/dashboard')->with('success', 'Login berhasil.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login')->with('success', 'Anda telah logout.');
    }
}
