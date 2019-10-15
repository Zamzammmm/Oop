<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Keluarga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <font face="Courier New"/>
    <fieldset style="width : 50%, margin="center "" >
    <legend style="font-size:2vw">Daftar Keluarga</legend>
    <table border="0" style="center;">
    <form action="" method="GET">
        <label for="">Jumlah Anggota </label>
        <input type="number" name="jumlah" required>
        <br>
        <input type="submit" name="submit" value="Simpan">
        <hr>
</form>
<form action="proseskeluarga.php" method="post">
<?php
if(isset($_GET['submit'])){  
    $jml_form=$_GET['jumlah'];
    for($a=1; $a<=$jml_form; $a++){
        ?>
    
    <label for="">Nama</label>
    <input type="text" name="nama[]" required>
    <label for="">NIK</label>
    <input type="number" name="nik[]" required>
    <label for="">Umur</label>
    <input type="number" name="umur[]" required>
    <br>

    <?php } ?>
    <label for="">Alamat</label>
    <br>
    <textarea name="alamat" rows ="4" cols="79"required></textarea>
    <br>
     <input type="submit" name="sbm" value="Simpan">
    <input type="reset" value="Reset">
    </form>
<?php } ?>
        
</fieldset>

</body>
</html>