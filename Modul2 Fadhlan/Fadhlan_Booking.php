<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Dealership</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        * {
            margin:0;
            padding:0;
        }

        .navbg {
            background-color: aqua;
        }

        li a:hover:not(.active) {
            background-color: #a6bce3;
        }

        .center {
            text-align: center;
        }

        .left {
            padding: 20px;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 3px;
            background-color: #f6f6f3;
        }
    </style>
</head>
<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <ul class="nav justify-content-center navbg">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./Fadhlan_Home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./Fadhlan_Booking.php">Booking</a>
        </li>
    </ul>

    <section style="margin: top 50px;;">
        <div class="center">
          <br><br><br><h1><strong>Pendaftaran Mobil</strong></h1>
        </div>
        <div class="mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://s.kaskus.id/images/2021/03/24/9230798_202103240138540148.png" alt="Mclaren" width="80%" height="auto">
                </div>
                <div class="col-md-8">
                    <form action="./Fadhlan_Mybook.php" method="POST">
                        <div class="mb-3 left">
            
                        <label class="form-label" for="Name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="Name" name="Name" value="Fadhlan_1202204132" readonly><br>
            
                        <label class="form-label" for="Nohp">Nomor Handphone</label>
                        <input type="text" class="form-control" id="Nohp" placeholder="08120812081" name="Nohp"><br>
            
                        <label for="form-label" for="tggl">Book Date</label><br>
                        <input type="date" class="form-control" id="tggl" name="tggl"> <br>

                        <label for="form-label" for="mulai">Start Time</label><br>
                        <input type="time" class="form-control" id="mulai" name="mulai"> <br>

                        <label class="form-label" for="Durasi">Durasi (days)</label>
                        <input type="number" class="form-control" id="Durasi" placeholder="1" name="Durasi"><br>
                        
                        <label for="form-label">Jenis Mobil</label>
                        <select class="form-select" name="Jenis">
                            <option value="1400">Mclaren P1 $1400/day</option>
                            <option value="3200">Koenigsegg Agera R $3200/day</option>
                            <option value="10000">Bugatti Chiron $10.000/day</option>
                        </select><br>
            
                        <label for="form-label">Add Services?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Driver" value="500">
                            <label class="form-check-label" for="Supir">Driver /$500</label><br>
                            
                            <input class="form-check-input" type="radio" name="Health" value="100">
                            <label class="form-check-label" for="Health">Health Protocol /$100</label>
                        </div><br>
            
                        <button type="submit" class="btn btn-primary">Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </section>

    <footer>
        <p>Fadhlan_1202204132</p>
    </footer>
</body>
</html>