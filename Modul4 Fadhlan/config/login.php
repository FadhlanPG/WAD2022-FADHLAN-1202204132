<?php
include './connect.php';
if (!isset($_SESSION)){
    session_start();
}
if(isset($_POST['Login'])){

    $email = $_POST['Email'];
    $pwd = $_POST['Pwd'];

    $query= mysqli_query($dbmain, "SELECT * FROM user WHERE email='$email'");
    $data = mysqli_fetch_assoc($query);

    if(password_verify($pwd, $data['password'])){
        $_SESSION['email'] = $data['email'];
        $_SESSION['message']= 'Login berhasil';
        header('location:../page/Home_fadhlan.php');
        exit();
    } else {
        $_SESSION['message-error']='password salah';
        header('location:login.php');
        exit();
    }

    
}
?>