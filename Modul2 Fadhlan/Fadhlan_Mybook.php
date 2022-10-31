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

    <?php
    $name = $_POST['Name'];
    $nohp = $_P0ST['Nohp'];
    $date = $_POST['tggl'];
    $time = $_POST['mulai'];
    $hari = $_POST['Durasi'];
    $jenis = $_POST['Jenis'];
    $driver = issset($_POST['Driver']) ? $_POST['Driver'] : '0';
    $heath = isset($_POST['Health']) ? $_POST['Health'] : '0';
    $hargatotal = ($jenis*$hari)+$driver+$health;
    ?>

    <div class="container">
        <h2 class="text-center">THANK YOU <?php echo $name?> for Reserving <br></h2>
        <h3 class="text-center">Please double check your reservation details</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Services</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row"><?php echo(rand(1000000, 9999999)) ?></th>
                    <th><?php echo $name?></th>
                    <th><?php echo $date . "<br>"; echo $time ?></th>
                    <th><?php
                        $format ='days';
                        $lama = date('y-m-d', strtotime($hari.' '.$format, strtotime($date)));
                        echo $lama. '<br>'; echo $time
                        ?>
                     </th>
                    <th>
                    <?php
                        if ($jenis =='1400') {
                            echo 'McLaren P1';
                        } elseif ($jenis == '3200') {
                            echo "Agera R";
                        } elseif ($jenis == "10000") {
                            echo "Bugatti Chiron";
                        } else {
                            echo "No Car";
                        }
                        ?>
                    </th>
                    <th><?php echo $nohp?></th>
                    <th>
                        <?php
                        if ($driver+$health=='600') {
                            echo "<ul>
                                    <li>Driver</li>
                                    <li>Health Protocol</>
                                  </ul>";
                        } elseif ($driver != "0" && $health=='0') {
                            echo "Driver";
                        } elseif ($driver == "0" && $health!='0') {
                            echo "Health Protocol";
                        } else {
                            echo "No Services";
                        }
                        ?>
                    </th>
                    <th>$<?php echo $hargatotal?></th>

                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <p>Fadhlan_1202204132</p>
    </footer>
</body>
</html>