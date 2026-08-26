<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class PermissionFilter implements FilterInterface
{
    /**
     * Memastikan user memiliki salah satu permission yang diberikan.
     * Dipakai pada route, contoh: ['filter' => 'permission:users.view,users.create']
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $userId  = (int) $session->get('user_id');

        if (! $session->get('authenticated') || $userId < 1) {
            return redirect()->to('/admin/login');
        }

        $userModel = new UserModel();
        $allowed   = false;

        if (! empty($arguments)) {
            foreach ($arguments as $slug) {
                if ($userModel->hasPermission($userId, trim($slug))) {
                    $allowed = true;
                    break;
                }
            }
        } else {
            // Tidak ada permission yang ditentukan => anggap hanya butuh login.
            $allowed = true;
        }

        if (! $allowed) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // no-op
    }
}
