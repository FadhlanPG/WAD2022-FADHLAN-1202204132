<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        * {
            margin:0;
            padding:0;
        }
        .navbg {
            background-color: #3563E9;
        }

        .navtxt {
            color: white;
        }

        .navgin {
            margin-left: 100px;
        }

        .navadd {
            background-color: white;
            margin-left: 1000px;
        }
        
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <ul class="nav justify-content-left navbg">
        <li class="nav-item">
            <a class="nav-link navtxt navgin" aria-current="page" href="./Home_fadhlan.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active navtxt" href="./Listcar_fadhlan.php">MyCar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active navadd" href="./Add_fadhlan.php">Add Car</a>
    </ul>

    <?php

    include '../config/connect.php';

    $id_mobil = ["SELECT id_mobil FROM showroom_fadhlan_table"];

    $select = mysqli_query($dbmain, "SELECT * FROM showroom_fadhlan_table WHERE id_mobil  = '$id_mobil'");

    $show = mysqli_fetch_assoc($select);
    ?>
           
  </body>
</html>