<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Diri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <font face="Courier New"/>
    <fieldset style="width : 50%, margin="center"" >
        <legend style="font-size:2vw">Data Diri</legend>
    <FORM ACTION="prosespenggajian.php" METHOD="POST" NAME="input">
    <table border="0" style="center;">
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>NIP</td>
        <td>:</td>
        <td><input type="number" name="nip" required></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><textarea name = "alamat" rows ="5" cols="40"></textarea></td>
    </tr>
    <tr>
        <td>Jumlah Hari Kerja</td>
        <td>:</td>
        <td><input type="number" name="jml_kerja" required></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="sbm" value="Proses">
    </tr>

        </form>
    </fieldset>
</body>
</html>