<!-- Dashboard Content Start -->
    <section class="dashboardContent">
        <div class="d-flex flex-row">
            <!-- Sidebar Section Start -->
                <?php $this->load->view('template/__Sidebar');?>
            <!-- Sidebar Section End -->
            <div class="container">
                <div class="content p-4">
                    <div class="d-flex flex-row">
                        <p class="fw-bold">Admin / Kelola Meja</p>
                        <p class="fw-bold ms-auto"><?= $user['username']?></p>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#TambahData" class="btn ms-auto text-light fw-bold" style="background: #850000;">Tambah Data</button>
                    </div>
                    <div class="d-flex flex-wrap daftarMejaAdmin mt-5 gap-4">
                        <?php foreach($meja as $m):?>
                            <div class="card" width="500">
                                <div class="card-header d-flex">
                                    <p class="fw-bold">Meja <?= $m['noMeja']?></p>
                                    <div class="ms-auto">
                                        <a href="">Edit</a>
                                        <a href="">Hapus</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Status : <span class="fw-bold"><?= $m['status_meja']?></span></p>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section PopUp Start -->
        <?php if ($this->session->flashdata('flash_message')): ?>
            <div class="flash-message" id="flashMessage">
                <?= $this->session->flashdata('flash_message'); ?>
            </div>
        <?php endif; ?>
    <!-- section PopUp End -->
<!-- Dashboard Content End -->
<!-----------------------Accessories------------------------------->
<!-- Modal Tambah Data Start -->
    <div class="modal fade" id="TambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('Tambah_Data/Meja');?>" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">WeBilld - Tambah Data Meja</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column gap-3 NoMeja">
                            <label for="noMeja">Nomor Meja</label>
                            <input type="text" name="noMeja" id="noMeja">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-sm">Reset</button>
                        <button type="submit" class="btn btn-sm">Tambah Meja</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Modal Tambah Data End -->

<style>

</style>