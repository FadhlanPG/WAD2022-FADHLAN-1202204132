<?php
include ('./connect.php');
if (isset($_POST['Daftar'])){
    $email = $_POST['Email'];
    $user = $_POST['User'];
    $nohp = $_POST['Nohp'];
    $pwd = $_POST['Pwd'];//pass
    $con = $_POST['Pwdcon'];//conf

    if ($pwd==$con){
        $ins="INSERT INTO user(nama,email,password,no_hp) VALUES('$user','$email','$pwd','$nohp')";
    } else {
        echo "Password do not match";
        echo "<meta http-equiv=refresh content=2;URL='../page/Registrasi_fadhlan.php'>";
    }

    $sql_cek = "SELECT email FROM user WHERE email = '$email'";
    $cek = $dbmain ->query($sql_cek);;

    if($cek -> num_rows > 0){
        session_start();

        while ($row = $cek -> fetch_assoc()){
            $email = $_POST['Email'];
            $emailcek = $row['email'];
            $nama = $row['nama'];
            $uid = $row['id'];
        }

        if($email==$emailcek){
            $_SESSION['register'] = 'gagal';
            header('location:../page/Registrasi_fadhlan.php');
        }
        mysqli_query($dbmain,$ins);
    }
    
    //mysqli_query($dbmain,$ins);
    //header('location:../page/Login_fadhlan.php');

    }
    echo 'SELECT id'
?>