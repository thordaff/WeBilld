<!-- Section Navbar Start -->
    <nav class="navbar navbar-expand-lg" style="background:#850000; color:white!important;">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="<?= base_url('beranda');?>">WeBilld</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('Beranda');?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('Meja');?>">Meja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Kontak</a>
                    </li>
                </ul>
                    <?php if($this->session->userdata('email')){ ?>
                        <div class="dropdown">
                            <a class="nav-link ms-auto fw-bold" type="button" data-bs-toggle="dropdown"><?= $user['username'];?></a>
                            <ul class="dropdown-menu mt-3">
                                <li><a class="item" href="<?= base_url('AKun');?>">Akun</a></li>
                                <li><a class="item" href="<?= base_url('Pesanan');?>">Pesanan</a></li>
                                <li><a class="item" href="<?= base_url('Riwayat');?>">Riwayat</a></li>
                                <li><a class="item" href="<?= base_url('Logout');?>">Logout</a></li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <a class="nav-link ms-auto" href="Login">Login</a>
                    <?php } ?>
                </a> 
            </div>
        </div>
    </nav>
<!-- Section Navbar End -->

<style>
    
</style>