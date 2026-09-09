<!DOCTYPE html>
<html>

<head>
    <title>Data Dosen</title>
</head>

<body>

    <h2>DATA DOSEN</h2>
    <h3>Politeknik Negeri Jember</h3>

    <table border="1">
        <tr>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>

        <?php foreach ($dosen as $dsn): ?>
        <tr>
            <td><?= $dsn['nidn']; ?></td>
            <td><?= $dsn['nama']; ?></td>
            <td><?= $dsn['prodi']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>
