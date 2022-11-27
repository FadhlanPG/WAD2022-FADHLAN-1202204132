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
    </ul>

    <?php
        include '../config/connect.php';
        $id_mobil = $_GET['id_mobil'];
        $query = "SELECT * FROM showroom_fadhlan_table where id_mobil ='$id_mobil'";
        $show = mysqli_query($dbmain,$query);
        while ($data = mysqli_fetch_array($show)) {
      ?>


    <div class="container mt-5 mb-5">
    <form>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items:center mt-2">
            <img src="../image/<?php echo $data['foto_mobil'];?>" class="card-img-top">
            </div>
        </div>


        <div class="col">
            <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">

                <label class="form-label" for="Namecar">Nama Mobil</label>
                <input type="text" class="form-control" id="Namecar" name="Namecar" value="<?php echo $data['nama_mobil']; ?>" readonly> <br>
                    
                <label class="form-label" for="Nama">Nama Pemilik</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $data['pemilik_mobil']; ?>" readonly><br>

                <label class="form-label" for="Merk">Merk Mobil</label>
                <input type="text" class="form-control" id="Merk" name="Merk" value="<?php echo $data['merk_mobil']; ?>" readonly><br>

                <label class="form-label" for="Beli">Tanggal Beli</label>
                <input type="date" class="form-control" id="Beli" name="Beli" value="<?php echo $data['tanggal_beli']; ?>" readonly><br>

                <label class="form-label" for="Desc">Deskripsi</label>
                <textarea class="form-control" id="Desc" name="Desc" rows="3" readonly> <?php echo $data['deskripsi']; ?></textarea><br>


                <div>
                    <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                </div>
                <div class="mb-5 px-2">
                    <input class="form-check-input" type="radio" name="status" value="<?php echo $data['status_pembayaran']; ?>">
                    <label class="form-check-label" for="lunas"><?php echo $data['status_pembayaran']; ?></label>
                </div>

                <a href="../page/Edit_fadhlan.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-primary" style="width:150px;">Edit Car</a>
                
            </div>
            </form>
        </div>
    <?php } ?>
  </body>
</html>
