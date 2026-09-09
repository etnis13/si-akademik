<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>

    <h1>Sistem Informasi Mahasiswa</h1>
    <h2>DATA MAHASISWA</h2>
    <h3>Politeknik Negeri Jember</h3>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['prodi']; ?></td>
            <td>
                <a href="/si-akademik/public/mahasiswa/detail?nim=<?= $mhs['nim']; ?>">
                    Detail
                </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>
