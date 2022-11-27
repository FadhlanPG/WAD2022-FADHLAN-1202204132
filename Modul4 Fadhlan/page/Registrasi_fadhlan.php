<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Showroom register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <?php if($_SESSION['register'] =='gagal'){$_SESSION['register']='' ?>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Alert</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Email sama!
            </div>
        </div>
    <?php }?>

    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col">
                    <div class="d-flex align-items:center mt-2">
                    <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/hf7/h91/8817879253022/4%20Alasan%20Memilih%20Mobil%20Hatchback.jpg" class="card-img-top">
                    </div>
                </div>

                <div class="col">
                    <form class="mt-5" style="margin-right:250px" action="../config/register.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="Email">Email</label>
                            <input type="text" class="form-control" id="Email" name="Email"> <br>
                                
                            <label class="form-label" for="User">Nama</label>
                            <input type="text" class="form-control" id="User" name="User"><br>

                            <label class="form-label" for="Nohp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="Nohp" name="Nohp"><br>

                            <label class="form-label" for="Pwd">Password</label>
                            <input type="password" class="form-control" id="Pwd" name="Pwd"><br>

                            <label class="form-label" for="Pwdcon">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="Pwdcon" name="Pwdcon"><br>

                            <button type="submit" class="btn btn-primary mb-3" name="Daftar">Daftar</button>

                            <h6>Punya akun?<a href="./Login_fadhlan.php">login</a></h6>
                        </div>
                    </form>
                </div>
            </div>
    </div>
  </body>
</html>