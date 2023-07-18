<!-- Section Meja Start -->
    <section class="meja mt-5 pt-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-4">
                <?php foreach($meja as $key => $m):?>
                    <a class="nav-link" href="DetailMeja/<?= $m['id_meja']?>">
                        <div class="card d-flex">
                            <div class="card-footer mt-auto text-light" style="border-top: none;">
                                <h5 class="fw-bold mb-3">Meja <?= $key + 1?></h5>
                                <?php if ($m['statusMeja_id'] == 1) {?>
                                    <div class="d-flex flex-row gap-2">
                                        <div class="statusIcon" style="width:20px;height:20px;border-radius:50%;background:#FFDB89;"></div>
                                        <p>Meja Kosong</p>
                                    </div>
                                <?php } elseif($m['statusMeja'] == 2) {?>
                                    <div class="d-flex flex-row gap-2">
                                        <div class="statusIcon" style="width:20px;height:20px;border-radius:50%;background:#DC0000;"></div>
                                        <p>Meja Kosong</p>
                                    </div>
                                <?php } else { ?>
                                    <div class="d-flex flex-row">
                                        <div class="statusIcon" style="width:20px;height:20px;border-radius:50%;background:#9B9B9B;"></div>
                                        <p>Meja Dalam Perbaikan</p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<!-- Section Meja Stop -->