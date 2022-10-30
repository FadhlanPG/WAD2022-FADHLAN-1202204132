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
            <a class="nav-link active" aria-current="page" href="./Fadhlan_Home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./Fadhlan_Booking.php">Booking</a>
        </li>
    </ul>

    <section style="margin-top:100px; margin-left: 150px;">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <image src="https://robbreport.com/wp-content/uploads/2022/04/1-5.jpg?w=1000" class="card-img-top" alt="mclaren">
                    <div class="card-body">
                        <h5 class="card-title">Mclaren</h5>
                        <p class="card-text">
                            Harga sewa $1.400/Hari
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">two door coupé</li>
                            <li class="list-group-item">930 Horsepower</li>
                            <li class="list-group-item">Automatic Transmission</li>
                            </ul>
                        </p>
                        <form action="./Fadhlan_Booking.php" method="post">
                            <button type="submit" value="mclaren" class="btn btn-primary">BOOK NOW!</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://s.kaskus.id/images/2021/03/24/9230798_202103240138540148.png" class="card-img-top" alt="Koenigsegg Agera R">
                    <div class="card-body">
                        <h5 class="card-title">Koenigsegg Agera R</h5>
                        <p class="card-text">
                            Harga sewa $3.200/Hari
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">two door coupé</li>
                            <li class="list-group-item">947 Horsepower</li>
                            <li class="list-group-item">Automatic Transmission</li>
                            </ul>
                        </p>
                        <form action="./Fadhlan_Booking.php" method="post">
                            <button type="submit" value="agera" class="btn btn-primary">BOOK NOW!</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Bugatti_Chiron_%2836559710091%29.jpg/1200px-Bugatti_Chiron_%2836559710091%29.jpg" class="card-img-top" alt="Bugatti Chiron">
                    <div class="card-body">
                      <h5 class="card-title">Bugatti Chiron</h5>
                      <p class="card-text">
                        Harga sewa $10.000/Hari
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">two door coupé</li>
                          <li class="list-group-item">1479 Horsepower</li>
                          <li class="list-group-item">Automatic Transmission</li>
                        </ul>
                      </p>
                        <form action="./Fadhlan_Booking.php" method="post">
                            <button type="submit" value="chiron" class="btn btn-primary">BOOK NOW!</button>
                        </form>
                    </div>
                </div>
            </div>

          </div>
    </section>

    <footer>
        <p>Fadhlan_1202204132</p>
    </footer>
</body>
</html>
