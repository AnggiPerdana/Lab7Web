<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
<body>
    <h2>Menggunakan Variable</h2>
    <?php
    $nim = "312010609";
    $nama = 'Anggi Perdana';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
<body>
    <h1>Predefine Variable</h1>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
    <p>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    </p>
</body>
</html>