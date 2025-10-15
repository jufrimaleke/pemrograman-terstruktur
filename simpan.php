<?php
require_once 'functions/absen.php';

$nim = $_POST['nim'];
$tanggal = date('Y-m-d');
$status = $_POST['status'];

if (simpan_absen($nim, $tanggal, $status)) {
    echo "✅ Data absensi berhasil disimpan.<br>";
    echo "<a href='index.php'>Kembali</a>";
} else {
    echo "❌ Gagal menyimpan data.";
}
?>
