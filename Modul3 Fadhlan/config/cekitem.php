<?php
    include('..\config\connect.php');

    if ("SELECT id_mobil FROM showroom_fadhlan_table WHERE id_mobil IS NULL") { 
        header('location: ../page/Add_fadhlan.php');
    }else{
        header('location: ../page/Listcar_fadhlan.php');}
        
?>