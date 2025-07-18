<?php 
$nama = "ayinnnnnnnn";
$nrp = "08328932";
$email = "putz@gmail.co,";
$jurusan = "TEKNIK JARINGAN";
$gambar ="img/cemong.jpeg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tampilan Data</title>
</head>
<body>
    <h1>Tampilan Data Tabel MySQL</h1>
    <h2>Nama Mahasiswa : <?= $nama; ?></h2>
    <hr>
        <a href="tambah.php">tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
<tr>
    <td>1</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td>
        <img src="<?= $gambar; ?>" width="50">
    </td>
    <td><?= $nrp; ?></td>
    <td><?= $nama; ?></td>
    <td><?= $email; ?></td>
    <td><?= $jurusan; ?></td>
</tr>

</body>
</html>