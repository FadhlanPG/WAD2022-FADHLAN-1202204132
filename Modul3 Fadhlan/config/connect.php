<?php
    $dbmain = mysqli_connect("localhost:3308","root","","showroom_fadhlan_table");
    
    $sql = "SHOW TABLES FROM showroom_fadhlan_table";
    $result = mysqli_query($dbmain,$sql);

    if (!$result){
        echo "DB Error, could not list tables\n";
        echo 'MySQL Error: '.mysqli_error();
        exit;
    }

    
?>