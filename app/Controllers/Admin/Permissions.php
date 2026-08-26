<?php

namespace App\Controllers\Admin;

use App\Models\PermissionModel;

class Permissions extends BaseAdminController
{
    protected PermissionModel $permissionModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->permissionModel = new PermissionModel();
    }

    public function index()
    {
        if (! $this->can('permissions.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $grouped = $this->permissionModel->getGrouped();

        return $this->render('admin/permissions/index', [
            'title'   => 'Permissions',
            'grouped' => $grouped,
        ]);
    }
}
