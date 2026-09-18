<?php

class Mahasiswa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("
            SELECT 
                mahasiswa.nim,
                mahasiswa.nama,
                mahasiswa.prodi,
                dosen.nama AS nama_dosen
            FROM mahasiswa
            LEFT JOIN dosen
                ON mahasiswa.dosen_id = dosen.id
            ORDER BY mahasiswa.nim ASC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBynim($nim)
    {
        $stmt = $this->pdo->prepare("
            SELECT 
                mahasiswa.nim,
                mahasiswa.nama,
                mahasiswa.prodi,
                dosen.nama AS nama_dosen
            FROM mahasiswa
            LEFT JOIN dosen
                ON mahasiswa.dosen_id = dosen.id
            WHERE mahasiswa.nim = ?
        ");

        $stmt->execute([$nim]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}