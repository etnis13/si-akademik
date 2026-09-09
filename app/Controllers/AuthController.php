<?php

class AuthController
{
    public function login()
    {
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function process()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username == 'admin' && $password == '12345') {

            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header('Location: /si-akademik/public/dashboard');
            exit;

        } else {

            $error = 'Username atau password salah.';
            require_once __DIR__ . '/../Views/auth/login.php';
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header('Location: /si-akademik/public/login');
        exit;
    }
}