<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="d-flex flex-row">
        <div class="img"></div>
        <div class="container">
            <div class="d-flex flex-column align-items-center content">
                <div class="text-header mb-4 pb-4">
                    <h1 class="text-center">WeBilld</h1>
                    <p>Jadikan Setiap Pukulan Berarti</p>
                </div>
                <form action="<?= base_url('Auth/Login');?>" method="post">
                    <div class="auth-content">
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
                        <a href="" class="btn btn-sm"><img src="img/google.png" width="20"> Google Account</a>
                        <a href="" class="btn btn-sm"><img src="img/phone-call.png" width="20"> Nomor Handphone</a>
                    </div>
                    <p class="text-center mt-4">Belum punya akun ? <a href="Register" class="fw-bold text-dark" style="text-decoration: none;">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

<style>
    input
    {
        border-radius: 20px;
    }
    .img
    {
        background: url('Assets/IMG/auth.png') no-repeat;
        background-size: 100%;
        height: 100vh;
        width: 75em;
    }
    .content
    {
        margin-top: 2em;
    }

    .button-auth .auth
    {
        color: white;
        background-color: #850000;

        width: 25em;
        border-radius: 20px;
    }
    .button-footer a
    {
        border: 1px solid black;
        border-radius: 20px;

        margin: 10px 0px;
        width: 25em;
    }
</style>