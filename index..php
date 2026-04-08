<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    </style>
    <div>
        <img src="http://10.11.11.78/aplikasi_estafet/assets/Logo_uib.png" alt="Logo_uib.png"> 
        <label for="NPM"> NPM: </label><br>
        <input type="text" id="NPM" name="NPM" value="Masukkan NPM"><br>
        <button type="submit">Submit</button>  <!-- Input login oleh Ryontankawijaya_2532011 -->

    </div>
    <div>
        <label for="PASSWORD"> PASSWORD: </label><br>
        <input type="text" password="PASSOWRD" value="Masukan Password"><br>
        <button type="submit">Submit</button> <!-- Input login oleh DivaNajwaMeitara_2532027 -->
    </div>

</body>
</html>


<?php 
    $host = '10.11.11.78';
    $user = 'estafet_user';
    $pass = 'Qwerty123$%';
    $db = 'estafet_db';

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("koneksi gagal:". mysqli_connect_error()); //database connect oleh Ryontankawijaya_2532011
    }
    //cari tahu gimana mau buka di localhost pathnya di C:\Users\Ryon Tan\OneDrive\Documents\GitHub\estafet_kelompok_6_timb
?>
