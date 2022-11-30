<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="bookingband">

    <!-- Header -->
    <div class="row text-center justify-content-center align-items-center jumbotron" style="position: relative;">
        <div class="text-header row justify-content-center">
            <p class="text-white headerlarge me-2 ms-2">Book Penampilan</p>
            <p class="text-white header3 col-md-6 me-2 ms-2">
                Musisi dan Band dengan rating hebat kami sering dipesan dengan cepat, jadi anda menjamin talent kami
                dengan booking sesegera mungkin
            </p>
        </div>
        <img src="/asset/header-bookingband.png" alt="...">
    </div>

    <div class="container">

        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-5 pb-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="/asset/<?= $band['header_img']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center pt-3 pb-3 pe-4 ps-4">
                            <div class="card-body">
                                <p class="card-title header1"><?= $band['name']; ?></p>
                                <p class="card-text body1">
                                    <?= $band['short_description']; ?>
                                </p>
                                <!-- <div class="button">
                                    <a href="/detailband" class="btn btn-2 pe-3 ps-3 pt-2 pb-2 mt-3">
                                        <i class="bi bi-heart ms-2 text-danger"></i>
                                        Tambah Keranjang
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="header2">
                    Data Diri Anda
                </p>
                <form action="/successbooking/<?= $band['slug']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" id="product_id" name="product_id" value="<?= $band['id']; ?>">
                    <input type="hidden" id="nama_band" name="nama_band" value="<?= $band['name']; ?>">
                    <div class="row">
                        <div class="col-md">
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="d-flex align-items-center form-label">Nama<p
                                        class="ms-1 text-danger mb-0">*</p></label>
                                <input type="text"
                                    class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                    id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $nama; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Nama Harus diisi dengan benar!
                                </div>
                            </div>

                            <!-- Nomor Handphone -->
                            <div class="mb-3">
                                <label for="nomor_hp" class="d-flex align-items-center form-label">Nomor HP / Whatsapp<p
                                        class="ms-1 text-danger mb-0">*</p></label>
                                <input type="tel"
                                    class="form-control <?= ($validation->hasError('nomor_hp')) ? 'is-invalid' : ''; ?>"
                                    id="nomor_hp" name="nomor_hp" placeholder="Masukkan nomor telepon"
                                    value="<?= $nomor_hp; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Masukan Nomor HP Anda dengn format angka yang benar, Gunakan awalan +62 / 62 / 0!
                                </div>
                            </div>

                            <!-- Tipe Event -->
                            <div class="mb-3">
                                <label for="tipe_event" class="d-flex align-items-center form-label">Tipe Event<p
                                        class="ms-1 text-danger mb-0">*</p></label>
                                <input type="text"
                                    class="form-control <?= ($validation->hasError('tipe_event')) ? 'is-invalid' : ''; ?>"
                                    id="tipe_event" name="tipe_event" placeholder="Masukkan Jenis Event"
                                    value="<?= $tipe_event; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Masukan Tipe Event Anda!
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="d-flex align-items-center form-label">Email<p
                                        class="ms-1 text-danger mb-0">*</p></label>
                                <input type="email"
                                    class="form-control <?= ($validation->hasError('email_user')) ? 'is-invalid' : ''; ?>"
                                    id="email_user" name="email_user" placeholder="name@example.com"
                                    value="<?= $email_user; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Masukan Email Anda dengan format yang benar!
                                </div>
                            </div>

                            <!-- Tanggal Reservasi -->
                            <div class="mb-3">
                                <label for="tanggal_pemesanan" class="d-flex align-items-center form-label">Tanggal
                                    Reservasi<p class="ms-1 text-danger mb-0">*</p></label>
                                <input type="date"
                                    class="form-control <?= ($validation->hasError('tanggal_pemesanan')) ? 'is-invalid' : ''; ?>"
                                    id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Tanggal/Bulan/Tahun"
                                    value="<?= $tanggal_pemesanan; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Masukan Tanggal Reservasi Anda!
                                </div>
                            </div>

                            <!-- Alamat Acara -->
                            <div class="mb-3">
                                <label for="alamat" class="d-flex align-items-center form-label">Alamat Acara<p
                                        class="ms-1 text-danger mb-0">*</p></label>
                                <input type="text"
                                    class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                    id="alamat" name="alamat" placeholder="Masukkan alamat acara secara lengkap"
                                    value="<?= $alamat; ?>">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Masukan Alamat Acara Anda!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- Pesan -->
                            <div class="mb-3">
                                <label for="pesan" class="d-flex align-items-center form-label">Pesan<p
                                        class="ms-1 text-danger mb-0"></p></label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="3"
                                    placeholder="Silahkan isi pesan tambahan jika diperlukan"><?= $pesan; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center pb-5 mb-5">
                        <div class="col">
                            <div class="button text-center">
                                <button type="submit" class="btn btn-1 pe-5 ps-5 pt-2 pb-2 mt-3">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>

<?= $this->endSection(); ?>