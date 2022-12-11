<?php include "../config/connect.php";

    $id = 1;
    $sl = "SELECT nama_mobil FROM showroom_fadhlan_table WHERE id_mobil='$id'";
    mysqli_query($dbmain,$sl);
    $show = mysqli_fetch_assoc($sl);
    echo $show;

?>