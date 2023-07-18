<!-- Section Sidebar Start -->
    <aside class="d-flex flex-column sidebar p-4 " style="background: #850000; height: 100vh; width: 15%;">
        <div class="sidebar-header">
            <h3 class="fw-bold text-light"><a class="navbar-brand text-light fw-bold" href="<?= base_url('Admin/Dashboard');?>">WeBilld</a></h3>
        </div>
        <div class="sidebar-body mt-5 pt-5">
            <ul class="navbar-nav text-light justify-content-center">
                <li class="nav-item">
                    <a href="<?= base_url('Admin/Dashboard');?>" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/KelolaMeja');?>" class="nav-link">Kelola Meja</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/Pesanan');?>" class="nav-link">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/Riwayat');?>" class="nav-link">Riwayat</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer mt-auto text-light">
            <a href="<?= base_url('Logout');?>" class="nav-link">Logout</a>
        </div>
    </aside>
<!-- Section Sidebar End -->