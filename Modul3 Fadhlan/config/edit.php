<?php
include ('./connect.php');
if (isset($_POST['Selesai'])){
    $car = $_POST['Namecar'];
    $name = isset($_POST['Nama']) ? $_POST['Nama'] : '0';
    $merk = $_POST['Merk'];
    $date = $_POST['Beli'];
    $desc = $_POST['Desc'];
    $stat = $_POST['Bayar'];

    if (!empty($_FILES["Image"]['name'])) {
        $fileType = pathinfo($_FILES["Image"]["name"],PATHINFO_EXTENSION);
        $target_dir = "../image/";
        $filename = $car . "." . $fileType;
        $target_file = $target_dir . $filename;


        if ($fileType != "") {
            $ins = "INSERT INTO showroom_fadhlan_table(nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran)
            VALUES('$car','$name','$merk','$date','$desc','$targ    et_file','$stat')";
            move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file);

        }
    }
    
    mysqli_query($dbmain,$ins);
    header('location:../page/Listcar_fadhlan.php');

    }
    echo 'SELECT id_mobil' 
?>