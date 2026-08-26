<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthFilter implements FilterInterface
{
    /**
     * Melindungi route admin: jika belum login, arahkan ke halaman login.
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (! $session->get('authenticated')) {
            return redirect()->to('/admin/login')->with('error', 'Silakan login untuk melanjutkan.');
        }

        // Refresh data user & permission ke session bila perlu.
        $userId = (int) $session->get('user_id');
        if ($userId > 0) {
            $userModel = new UserModel();
            $user = $userModel->find($userId);

            // User tidak ditemukan atau sudah non-aktif => paksa logout.
            if (! $user || ($user['status'] ?? '') !== UserModel::STATUS_ACTIVE) {
                $session->destroy();
                return redirect()->to('/admin/login')
                    ->with('error', 'Sesi tidak valid. Silakan login kembali.');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // no-op
    }
}
