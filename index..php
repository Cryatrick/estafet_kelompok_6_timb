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
        <button type="submit">Submit</button>

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
        die("koneksi gagal:". mysqli_connect_error());
    }






?>