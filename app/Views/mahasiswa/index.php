<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow-sm">

            <div class="card-body">

                <h2 class="mb-2">
                    Sistem Informasi Mahasiswa
                </h2>

                <h4 class="mb-3">
                    Data Mahasiswa
                </h4>

                <p class="text-muted">
                    Politeknik Negeri Jember
                </p>


                <div class="table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead class="table-primary">

                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Program</th>
                                <th>Dosen</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                       <tbody>

    <?php foreach ($mahasiswa as $item): ?>

        <tr>

            <td>
                <?= htmlspecialchars($item['nim']) ?>
            </td>

            <td>
                <?= htmlspecialchars($item['nama']) ?>
            </td>

            <td>
                <?= htmlspecialchars($item['prodi']) ?>
            </td>

            <td>
                <?= htmlspecialchars($item['nama_dosen'] ?? '-') ?>
            </td>

            <td>
                <a
                    href="/si-akademik/public/mahasiswa/detail?nim=<?= $item['nim'] ?>"
                    class="btn btn-sm btn-primary">
                    Detail
                </a>
            </td>

        </tr>

    <?php endforeach; ?>

</tbody>

                    </table>

                </div>


                <a
                    href="/si-akademik/public/dashboard"
                    class="btn btn-secondary">
                    Kembali ke Dashboard
                </a>

            </div>

        </div>

    </div>

</body>

</html>