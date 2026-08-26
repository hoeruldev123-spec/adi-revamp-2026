<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**
 * Base controller untuk seluruh halaman admin.
 * Menyediakan data user & permission ke view.
 */
abstract class BaseAdminController extends BaseController
{
    protected $helpers = ['admin'];

    protected ?array $currentUser = null;
    protected array  $permissions = [];
    protected array  $viewData = [];
    protected UserModel $userModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);

        $this->userModel = new UserModel();
        $userId = current_user_id();

        if ($userId) {
            $this->currentUser = $this->userModel->find($userId);
            $perms             = $this->userModel->getPermissions($userId);
            $this->permissions = array_column($perms, 'slug');
        }

        // Sediakan data global untuk seluruh view admin.
        $this->viewData = [
            'currentUser' => $this->currentUser,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * Cek otorisasi di level controller/action (defense in depth).
     */
    protected function can(string $slug): bool
    {
        return in_array($slug, $this->permissions, true);
    }

    /**
     * Render view admin dengan layout, menyisipkan data global.
     */
    protected function render(string $view, array $data = [])
    {
        return view($view, $data + $this->viewData);
    }
}
