<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Informasi Akademik</title>
</head>
<body>

    <h1>Sistem Informasi Akademik</h1>
    <h2>Login</h2>

    <?php if (isset($error)): ?>
        <p style="color: red;">
            <?= $error; ?>
        </p>
    <?php endif; ?>

    <form action="/si-akademik/public/login/process" method="POST">

        <label>Username</label><br>
        <input type="text" name="username" required>

        <br><br>

        <label>Password</label><br>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>
