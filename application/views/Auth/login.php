<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <!-- CSS File -->
        <link rel="stylesheet" href="<?= base_url('Assets/CSS/auth.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- JS File -->
        <script src="<?= base_url('Assets/JS/popUp.js')?>"></script>
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
                <form action="<?= base_url('Auth/Login');?>" method="post">
                    <div class="auth-content mt-5">
                        <div class="email d-flex flex-column mb-4">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="password d-flex flex-column">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="d-flex flex-column button-auth text-center mt-5">
                            <button class="btn btn-sm auth">Masuk</button>
                            <a href="#" class="fw-bold mt-4" style="background: none!important;color:black;text-decoration:none;">Lupa Password ?</a>
                        </div>
                        <hr>
                    </div>
                </form>
                <div class="auth-footer">
                    <div class="button-footer d-flex flex-column">
                        <a href="" class="btn btn-sm"><i class="fa-brands fa-google"></i> Google Account</a>
                        <a href="" class="btn btn-sm"><i class="fa-solid fa-phone"></i> Nomor Handphone</a>
                    </div>
                    <p class="text-center mt-4">Belum punya akun ? <a href="Register" class="fw-bold text-dark" style="text-decoration: none;">Daftar</a></p>
                </div>
                <!-- Section PopUp Start -->
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="flash-message" id="flashMessage">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    <?php endif; ?>
                <!-- section PopUp End -->
            </div>
        </div>
    </div>
  </body>
</html>