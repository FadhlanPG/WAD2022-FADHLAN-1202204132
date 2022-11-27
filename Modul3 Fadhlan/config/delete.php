<?php
    include 'connect.php';

    $id= $_GET['id_mobil'];
    $query = mysqli_query($dbmain,"SELECT * FROM showroom_fadhlan_table where id_mobil ='$id'");
    $data = mysqli_fetch_assoc($query);
    $foto = $data['foto_mobil'];

        if(file_exists("../image/$foto")){
            unlink("../image/$foto");
            if(isset($_GET['id_mobil'])){
                mysqli_query($dbmain, "DELETE FROM showroom_fadhlan_table WHERE id_mobil='$_GET[id_mobil]'");
            }
        }
        echo "Data Telah Terhapus";
        echo "<meta http-equiv=refresh content=2;URL='../page/ListCar_fadhlan.php'>";

?>