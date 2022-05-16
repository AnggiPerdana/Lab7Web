<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form style="" action="hasil_form.php" method="post">
        Nama :
            <input type="text" name="nama" id="nama">
            <br>
        Tanggal Lahir :
            <input type="date" name="tgl_lahir" id="tgl_lahir">
            <br>
        Pekerjaan :
            <select name="pekerjaan" id="pekerjaan">
                <option value="dokter">Dokter</option>
                <option value="guru">Guru</option>
                <option value="pengusaha">Pengusaha</option>
                <option value="karyawan">Karyawan</option>
            </select>
            <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>