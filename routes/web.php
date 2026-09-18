<?php

session_start();

require_once __DIR__ . '/../config/database.php';

require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace('/si-akademik/public/', '', $url);
$url = trim($url, '/');

if ($url == '') {
    $url = 'login';
}

if ($url == 'login') {

    $controller = new AuthController();
    $controller->login();

} else if ($url == 'login/process') {

    $controller = new AuthController();
    $controller->process();

} else if ($url == 'logout') {

    $controller = new AuthController();
    $controller->logout();

} else if ($url == 'dashboard') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    require_once __DIR__ . '/../app/Views/dashboard/index.php';

} else if ($url == 'mahasiswa') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new MahasiswaController();
    $controller->index();

} else if ($url == 'mahasiswa/detail') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new MahasiswaController();
    $controller->detail();

} else if ($url == 'dosen') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->index();

} else if ($url == 'dosen/create') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->create();

} else if ($url == 'dosen/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->store();

} else if ($url == 'dosen/edit' && isset($_GET['id'])) {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->edit($_GET['id']);

} else if ($url == 'dosen/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->update($_POST['id']);

} else if ($url == 'dosen/delete' && isset($_GET['id'])) {

    $middleware = new AuthMiddleware();
    $middleware->handle();

    $controller = new DosenController();
    $controller->delete($_GET['id']);

} else {

    echo "404 - Halaman tidak ditemukan";
}