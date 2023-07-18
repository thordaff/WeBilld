<!-- Section Detail Meja Start -->
    <section class="detailMeja mt-5">
        <div class="container">
            <div class="d-flex header">
                <div class="card d-flex align-items-center justify-content-center">
                    <p class="fw-bold">Meja <?= $meja['id_meja']?></p>
                </div>
            </div>
            <section class="contentDetail mt-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h6 class="fw-bold">Input Data Pemesanan</h6>
                    </div>
                    <form action="<?= base_url('Tambah_Data/Pesanan');?>" method="post">
                        <div class="d-flex flex-row justify-content-center mt-4 gap-5">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column nama">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama">
                                </div>
                                <div class="d-flex flex-column alamat">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat">
                                </div>
                                <div class="d-flex flex-column email">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column noHP">
                                    <label for="noHP">Nomor Handphone</label>
                                    <input type="number" name="noHP" id="noHP">
                                </div>
                                <div class="d-flex flex-column tanggal">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal">
                                </div>
                                <div class="d-flex flex-row noMeja gap-5">
                                    <div class="d-flex flex-column">
                                        <label for="jamStart">Jam Mulai</label>
                                        <input type="time" id="jamStart" name="jamStart">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="jamEnd">Jam Selesai</label>
                                        <input type="time" id="jamEnd" name="jamEnd">
                                    </div>
                                    <input type="hidden" name="noMeja" id="noMeja" value="<?= $meja['id_meja'] ?>">
                                    <input type="hidden" name="idUser" id="idUser" value="<?= $user['id_user'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center button-pesan mt-5">
                            <button type="submit" class="btn btn-sm text-light" style="background:#850000;padding: 5px 15em;">Pesan Meja</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
<!-- Section Detail Meja End -->

<style>
    .card
    {
        width: 100%;
        height: 10em;
    }
</style>
<script>
  function setMinTime() {
    var jamStart = document.getElementById("jamStart").value;
    document.getElementById("jamEnd").min = jamStart;
  }
</script>