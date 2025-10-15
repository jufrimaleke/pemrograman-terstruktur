<?php
require_once __DIR__ . '/../functions/absen.php';
$data = tampil_absen();
?>

<h3>Daftar Kehadiran Mahasiswa</h3>
<table border="1" cellpadding="5">
    <tr><th>NIM</th><th>Nama</th><th>Tanggal</th><th>Status</th></tr>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama_mhs'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>
    <?php } ?>
</table>
