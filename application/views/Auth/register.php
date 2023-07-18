<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- CSS File -->
        <link rel="stylesheet" href="<?= base_url('Assets/CSS/auth.css ');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- JS File -->
        <script src="<?= base_url('Assets/JS/popUp.js');?>"></script>
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="d-flex flex-row auth-body">
        <div class="img"></div>
        <div class="container">
            <div class="d-flex flex-column align-items-center content">
                <div class="text-header mb-4 pb-4">
                    <h1 class="text-center fw-bold">WeBilld</h1>
                    <h5>Jadikan Setiap Pukulan Berarti</h5> 
                </div>
                <form action="<?= base_url('Auth/Register');?>" method="post">
                    <div class="auth-content mt-4">
                        <div class="username d-flex flex-column mb-3">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="email d-flex flex-column mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="password d-flex flex-column">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="d-flex flex-column button-auth text-center mt-5">
                            <button class="btn btn-sm auth">Register</button>
                        </div>
                        <hr>
                    </div>
                </form>
                <div class="auth-footer">
                    <div class="button-footer d-flex flex-column">
                        <a href="" class="btn btn-sm"><i class="fa-brands fa-google"></i> Google Account</a>
                        <a href="" class="btn btn-sm"><i class="fa-solid fa-phone"></i> Nomor Handphone</a>
                    </div>
                    <p class="text-center mt-4">Sudah punya akun ? <a href="Login" class="fw-bold text-dark" style="text-decoration: none;">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>