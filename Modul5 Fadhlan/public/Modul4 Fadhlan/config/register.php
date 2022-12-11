<?php
if(!session_id()) {
    session_start();
}
include ('./connect.php');
if (isset($_POST['Daftar'])) {
    $email = $_POST['Email'];
    $user = $_POST['User'];
    $nohp = $_POST['Nohp'];
    $pwd = $_POST['Pwd'];//pass
    $con = $_POST['Pwdcon'];//conf post=p0st

    $sql_cek = "SELECT email FROM user WHERE email = '$email'";
    $cek = mysqli_query($dbmain, $sql_cek);//mysqli connect

    //if (!mysqli_fetch_assoc($cek)) {
        if ($pwd==$con) {
            $pwd = password_hash($pwd,PASSWORD_DEFAULT);
            $ins = "INSERT INTO user(nama,email,password,no_hp) VALUES('$user','$email','$pwd','$nohp')";
        } else {
            echo "Password do not match";
            echo "<meta http-equiv=refresh content=5;URL='../page/Registrasi_fadhlan.php'>";
        }
    //}
    //$_SESSION['unregister'] = 'gagal';
    //header('location:../page/Registrasi_fadhlan.php');
    
    mysqli_query($dbmain,$ins);
    header('location:../page/Login_fadhlan.php');

    }

?>