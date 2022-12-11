<?php include "../config/connect.php";?>

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
        
        .form{
            margin-left: 50px;
            margin-right: 50px;
        }
        h1{
            margin-left: 50px;
            margin-top: 20px;
        }

        h4{
            margin-left: 50px; 
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
            <a class="nav-link navtxt" href="./Listcar_fadhlan.php">MyCar</a>
        </li>
    </ul>

    <h1>
        <strong>Tambah Mobil</strong><br>
    </h1>
    <h4><small class="text-muted">Tambah Mobil baru</small></h4>
    <form action="../config/insert.php" method="post" class="form" enctype="multipart/form-data">

        <label class="form-label" for="Namecar">Nama Mobil</label>
        <input type="text" class="form-control" id="Namecar" name="Namecar" placeholder="Mobil Katak"><br>
            
        <label class="form-label" for="Nama">Nama Pemilik</label>
        <input type="text" class="form-control" id="Nama" placeholder="Nama-Nim" name="Nama"><br>

        <label class="form-label" for="Merk">Merk Mobil</label>
        <input type="text" class="form-control" id="Merk" placeholder="Niisama" name="Merk"><br>

        <label class="form-label" for="Beli">Tanggal Beli</label>
        <input type="date" class="form-control" id="Beli" placeholder="DD/MM/YYYY" name="Beli"><br>

        <label class="form-label" for="Desc">Deskripsi</label>
        <textarea class="form-control" id="Desc" placeholder="Blah BLAH bleh" name="Desc"></textarea><br>

        <label for="Image" class="form-label">Image</label>
        <input class="form-control" type="file" id="Image" name="Image" accept="image/*"><br>

        <label for="form-label">Status Pembayaran</label> <br>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="Bayar"> Lunas </label>
            <input class="form-check-input" type="radio" name="Bayar" id="Bayar" value="Lunas">
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="Bayar"> Belum Lunas </label>
            <input class="form-check-input" type="radio" name="Bayar" id="Bayar" value="Belum Lunas"> <br>
        </div><br><br>

        <button type="submit" name="Selesai" class="btn btn-primary">Selesai</button>
    </form>
  </body>
</html>