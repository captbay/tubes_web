<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="successbooking">

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row about-section justify-content-center">
            <div class="col pt-5">
                <p class="header1 text-center">
                    Pesanan Anda Sudah Kami Terima
                </p>
                <p class="body1 text-center mt-2 mb-2">
                    Terima kasih <b><?= $nama; ?></b> telah melakukan pemesanan band melalui Akordmusic Production
                </p>
                <p class="body1 text-center mt-2 mb-2">
                    Kami akan menghubungi Anda melalui nomor <b><?= $nomor_hp; ?></b> dalam waktu maksimal 1-2 hari
                    kerja
                </p>
                <p class="body1 text-center mt-2 mb-2">
                    Jadi jika Anda belum menerima balasan dalam waktu 3 hari, silakan hubungi kami melalui kontak kami
                    yang sudah tertera dalam halaman <a href="/kontak">Kontak</a>.
                </p>
            </div>
        </div>


        <div class="row justify-content-center pb-5 mb-5">
            <div class="col">
                <div class="button text-center">
                    <a href="/daftarband" class="btn btn-1 pe-5 ps-5 pt-2 pb-2 mt-3">
                        Selesai
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<?= $this->endSection(); ?>