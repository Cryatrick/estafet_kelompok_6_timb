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

            <form method="POST" action="index.php">
                <input type="text" name="nim" placeholder="nim">
               <button type="submit" name="login">Login</button>
            </form>



    

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
    };
    function loginUser(){
        global $conn;

        if (isset($_POST['login'])) {
            $nim = $_POST['nim'];
            $password = $_POST['password']; // assuming you have a password field

            $sql = "SELECT * FROM mahasiswa WHERE mahasiswa_npm = '{$nim}'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0){
                    echo "Login berhasil";
                    // redirect if needed
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "Password salah";
                }

            } else {
                echo "NIM tidak ditemukan";
            }
        }

    if (isset($_POST['login'])) {
    loginUser();
}
?>