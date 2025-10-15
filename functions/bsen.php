<?php
require_once __DIR__ . '/../config/koneksi.php';

// Simpan data absensi
function simpan_absen($nim, $tanggal, $status) {
    $conn = koneksi_db();
    $query = "INSERT INTO absen (nim, tanggal, status) VALUES ('$nim', '$tanggal', '$status')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}

// Ambil semua data absensi
function tampil_absen() {
    $conn = koneksi_db();
    $query = "SELECT a.*, m.nama_mhs 
              FROM absen a 
              JOIN mahasiswa m ON a.nim = m.nim
              ORDER BY tanggal DESC";
    $result = mysqli_query($conn, $query);
    return $result;
}
?>
