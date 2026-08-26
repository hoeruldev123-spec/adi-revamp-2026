<?php
$success = session('success');
$error   = session('error');
$errors  = session('errors');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | ADI Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #1f2937;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="card login-card shadow-sm">
        <div class="card-body p-4">

            <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" height="38" class="d-block mx-auto mb-3">

            <h4 class="mb-1 text-center">Admin</h4>
            <p class="text-muted text-center mb-4">Silakan login untuk melanjutkan</p>

            <?php if ($success): ?>
                <div class="alert alert-success"><?= esc($success) ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?= esc($error) ?></div>
            <?php endif; ?>
            <?php if (! empty($errors) && is_array($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $e): ?><li><?= esc($e) ?></li><?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="/admin/login" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= old('email') ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</body>

</html>