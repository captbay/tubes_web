<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="kontak">


    <!-- Header -->
    <div class="row text-center justify-content-center align-items-center jumbotron" style="position: relative;">
        <div class="col-md-6 text-header justify-content-center">

            <img src="/asset/logo.png" class="logo" style="max-width: 300px;max-height: 300px;" alt="">

            <p class="text-white headerlarge me-2 ms-2">
                Akordmusic Production
            </p>
        </div>
        <img class="background-kontak" src="/asset/header-kontak.png" alt="...">
    </div>


    <div class="kontak-hubungi d-flex justify-content-around align-items-center flex-wrap m-4 py-5">
        <div class="m-2 mb-4">
            <div class="card" style="max-width:30rem;height: 20rem;background-color: #76F45A;">
                <div class="card-header">
                    <h3 class="card-title">Hubungi Kami</h3>
                </div>
                <div class="card-body row">
                    <p class="card-text">
                        <i class="bi bi-whatsapp"></i> <a href="https://wa.me/6282359160878">+62 82359160878</a>
                    </p>
                    <p class="card-text">
                        <i class="bi bi-envelope"></i> akordmusicproduction@gmail.com
                    </p>
                    <p class="card-text">
                        <i class="bi bi-instagram"></i> akordmusic_
                    </p>
                </div>
                <div class="card-footer">
                    <h5 class="card-title">
                        Jam Kerja
                    </h5>
                    <p class="card-text">
                        Setiap Hari, 09.00 - 17.00 WITA
                    </p>
                </div>
            </div>
        </div>
        <div class="m-2">
            <form class="row g-3 needs-validation " style="max-width:40rem;" method="post" action="/kontak/add">
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php else : ?>
                <div></div>
                <?php endif; ?>
                <div class="col-12">
                    <label for="validationCustom01" class="d-flex align-items-center form-label">Nama<p
                            class="ms-1 text-danger mb-0">
                            *</p></label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                        id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $nama; ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Nama Harus diisi dengan benar!
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom02" class="d-flex align-items-center form-label">Nomor HP / Whatsapp<p
                            class="ms-1 text-danger mb-0">*</p></label>
                    <input type="tel" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>"
                        id="no_hp" name="no_hp" placeholder="Masukkan nomor telepon Anda" value="<?= $no_hp; ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Masukan Nomor HP Anda dengn format angka yang benar, Gunakan awalan +62 / 62 / 0!
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom03" class="d-flex align-items-center form-label">Email<p
                            class="ms-1 text-danger mb-0">*</p></label>
                    <input type="email"
                        class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email"
                        name="email" placeholder="name@example.com" value="<?= $email; ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Masukan Email Anda dengan format yang benar!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom04" class="d-flex align-items-center form-label">Kota Asal<p
                            class="ms-1 text-danger mb-0">*</p></label>
                    <input type="text" class="form-control <?= ($validation->hasError('asal')) ? 'is-invalid' : ''; ?>"
                        id="asal" name="asal" placeholder="Masukan Kota Asal Anda" value="<?= $asal; ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Masukan Kota Asal Anda dengan benar!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom05" class="d-flex align-items-center form-label">Pesan<p
                            class="ms-1 text-danger mb-0">*</p></label>
                    <textarea class="form-control <?= ($validation->hasError('pesan')) ? 'is-invalid' : ''; ?>"
                        name="pesan" id="pesan" rows="3"
                        placeholder="Silahkan isi pesan Anda!"><?= $pesan; ?></textarea>
                    <div class="invalid-feedback">
                        Tolong input pesan dengan benar!
                    </div>
                </div>
                <div class="button mt-5">
                    <button class="btn btn-1 pe-5 ps-5 pt-2 pb-2" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>