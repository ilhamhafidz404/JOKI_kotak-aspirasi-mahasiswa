<?php
$connect = mysqli_connect("localhost", "root", "", "kotak-aspirasi");


if(isset($_POST["email"]) && isset($_POST["password"])) {
    extract($_POST);
    $user= mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($user)){
        header("Location: ./../mahasiswa.php");
    } else{
        header("Location: ./../index.php?error");
    }
}
