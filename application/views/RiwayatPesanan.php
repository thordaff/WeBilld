<!-- Riwayat Pesanan Start -->
    <section class="riwayatPesanan mt-5">
        <div class="container">
            <?php foreach($pesananUser as $pesanan):?>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column">
                                <h6 class="fw-bold"><?= $pesanan['nama_lengkap'];?></h6>
                                <p><?= $pesanan['email'];?></p>
                            </div>
                            <div class="d-flex flex-column ms-auto">
                                <p><?= $pesanan['status']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-row gap-5">
                            <div class="d-flex flex-column">
                                <p>Tanggal Main</p>
                                <p><?= $pesanan['tanggal']?></p>
                            </div>
                            <div class="d-flex flex-row ms-auto gap-5">
                                <div class="d-flex flex-column">
                                    <p>Jam Mulai</p>
                                    <p><?= $pesanan['jam_mulai']?></p>
                                </div>
                                <div class="d-flex flex-column">
                                    <p>Jam Selesai</p>
                                    <p><?= $pesanan['jam_selesai']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
<!-- Riwayat Pesanan End -->