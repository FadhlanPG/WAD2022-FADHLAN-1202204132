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


    <div class="container mt-5 px-5">
    <h1>My Showroom</h1>
    <p>List Showroom</p>
    <div class="row">
      <?php
        include '../config/connect.php';
        $query = "SELECT * FROM showroom_fadhlan_table ORDER BY id_mobil ASC";
        $show = mysqli_query($dbmain,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>
          <div class="col">
            <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
              <img src="../image/<?php echo $data['foto_mobil'];?>" class="card-img-top"  style="min-height:200px;">
              <div class="card-body"  style="max-height:200px;">
                <h5 class="card-title"><?php echo $data['nama_mobil'];?></h5>
                <p class="card-text"><?php echo $data['deskripsi'];?></p>
                <div class="container px-5">
                  <a href="../page/Detail_fadhlan.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-primary">Detail</a>
                  <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger">Delete</a>
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
    </div>
    <?php
  
    $carData = mysqli_query($dbmain,"SELECT * FROM showroom_fadhlan_table");
    $countCar = mysqli_num_rows($carData);

    ?>
    <div class="container mt-5">
        <p class="fw-bold opacity-50 fixed-bottom px-3">Jumlah Mobil : <?php echo "$countCar" ?></p>
    </div>
</div>
           
  </body>
</html>