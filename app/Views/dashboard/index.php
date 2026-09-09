<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - Sistem Informasi Akademik</title>
</head>

<body>

    <h1>Sistem Informasi Akademik</h1>

    <h2>
        Selamat datang, <?= $_SESSION['username']; ?>.
    </h2>

    <h3>Menu:</h3>

    <ul>
        <li>
            <a href="/si-akademik/public/dashboard">
                Dashboard
            </a>
        </li>

        <li>
            <a href="/si-akademik/public/mahasiswa">
                Mahasiswa
            </a>
        </li>

        <li>
            <a href="/si-akademik/public/dosen">
                Dosen
            </a>
        </li>

        <li>
            <a href="/si-akademik/public/logout">
                Logout
            </a>
        </li>
    </ul>

</body>

</html>