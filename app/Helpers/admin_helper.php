<?php

use App\Models\UserModel;

if (! function_exists('is_authenticated')) {
    /**
     * Cek apakah user sudah login di area admin.
     */
    function is_authenticated(): bool
    {
        return (bool) session('authenticated');
    }
}

if (! function_exists('current_user_id')) {
    function current_user_id(): ?int
    {
        $id = session('user_id');
        return $id ? (int) $id : null;
    }
}

if (! function_exists('current_user')) {
    /**
     * Ambil data user yang sedang login (array) atau null.
     */
    function current_user(): ?array
    {
        $id = current_user_id();
        if (! $id) {
            return null;
        }
        return model(UserModel::class)->find($id);
    }
}

if (! function_exists('current_permissions')) {
    /**
     * Ambil list slug permission user yang sedang login.
     */
    function current_permissions(): array
    {
        $id = current_user_id();
        if (! $id) {
            return [];
        }
        $rows = model(UserModel::class)->getPermissions($id);
        return array_column($rows, 'slug');
    }
}

if (! function_exists('has_permission')) {
    /**
     * Cek apakah user yang login memiliki permission tertentu.
     */
    function has_permission(string $slug): bool
    {
        return in_array($slug, current_permissions(), true);
    }
}
