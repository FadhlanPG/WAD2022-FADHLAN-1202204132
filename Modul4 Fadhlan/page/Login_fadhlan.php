<?php if(!session_id()) {
    session_start();
}?>
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
    
    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col">
                    <div class="d-flex align-items:center mt-2">
                    <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/hf7/h91/8817879253022/4%20Alasan%20Memilih%20Mobil%20Hatchback.jpg" class="card-img-top">
                    </div>
                </div>


                <div class="col">
                    <form class="mt-5" style="margin-right:250px" action="../config/login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="Lemail">Email</label>
                            <input type="text" class="form-control" id="Lemail" name="Lemail" > <br>

                            <label class="form-label" for="Lpwd">Password</label>
                            <input type="password" class="form-control" id="Lpwd" name="Lpwd" ><br>

                            <button type="submit" class="btn btn-primary mb-3" name="Login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
  </body>
</html>