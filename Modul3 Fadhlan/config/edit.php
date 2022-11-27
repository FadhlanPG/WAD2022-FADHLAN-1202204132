<?php
    include 'connect.php';
    
    $query=mysqli_query($dbmain, "SELECT * FROM showroom_fadhlan_table WHERE id_mobil='$_GET[id_mobil]'");
    $data = mysqli_fetch_array($query);

    $direktori= "../image/";
    $file=$_FILES['Image']['name'];
    move_uploaded_file($_FILES['Image']['tmp_name'],$direktori.$file);

    if(isset($_POST['Selesai'])){
        mysqli_query($dbmain, "UPDATE showroom_fadhlan_table set
        nama_mobil = '$_POST[Namecar]',
        pemilik_mobil = '$_POST[Nama]',
        merk_mobil = '$_POST[Merk]',
        tanggal_beli = '$_POST[Beli]',
        deskripsi = '$_POST[Desc]',
        status_pembayaran = '$_POST[Bayar]',
        foto_mobil = '$file'

        WHERE id_mobil = '$_GET[id_mobil]'");

        echo "Data Berhasil Diupdate!";
        echo "<meta http-equiv=refresh content=2;URL='../page/ListCar_fadhlan.php'>";

    }
?>