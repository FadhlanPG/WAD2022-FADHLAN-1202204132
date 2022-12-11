<?php
include './connect.php';
if(!isset($_SESSION)){
    session_start();
}

    $email = $_POST['Lemail'];
    $pwd = $_POST['Lpwd'];

    $query= mysqli_query($dbmain, "SELECT * FROM user WHERE email='$email'");
    $data = mysqli_fetch_array($query);

    if (password_verify($pwd, $data['password'])) { //$pwd = $email
        //$_SESSION['message']= 'Login berhasil';
        header('location:../page/Home_fadhlan.php');
        echo 'bisa';
    } else {
        //$_SESSION['message-error']='password salah';
        header('location:../page/Login_fadhlan.php');
        echo 'gbs';
    }

    

?>