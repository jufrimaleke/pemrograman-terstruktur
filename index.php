<!DOCTYPE html>
<html>
<head>
    <title>Absensi Mahasiswa</title>
</head>
<body>
    <h2>Form Absensi Mahasiswa</h2>
    <form action="simpan.php" method="POST">
        NIM: <input type="text" name="nim" required><br><br>
        Status:
        <select name="status">
            <option value="Hadir">Hadir</option>
            <option value="Sakit">Sakit</option>
            <option value="Izin">Izin</option>
            <option value="Alfa">Alfa</option>
        </select><br><br>
        <button type="submit">Simpan</button>
    </form>

    <hr>
    <?php include 'views/tampil_absen.php'; ?>
</body>
</html>
