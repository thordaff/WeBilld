<!-- Section Navbar Start -->
    <nav class="navbar navbar-expand-lg" style="background:#850000; color:white!important;">
        <div class="container">
            <a class="navbar-brand text-light" href="#">WeBilld</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="#">Meja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Kontak</a>
                    </li>
                </ul>
                    <?php if($this->session->userdata('email')){ ?>
                        <a class="nav-link ms-auto" href="#"><?= $user['username'];?></a>
                    <?php } else { ?>
                        <a class="nav-link ms-auto" href="Login">Login</a>
                    <?php } ?>
                </a>
            </div>
        </div>
    </nav>
<!-- Section Navbar End -->