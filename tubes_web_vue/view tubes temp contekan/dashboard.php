<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="dashboard">

    <!-- Header -->
    <div class="row text-center justify-content-center align-items-center jumbotron" style="position: relative;">
        <div class="col-md-6 text-header row justify-content-center">
            <p class="text-white headerlarge me-2 ms-2">
                Cari Musisi dan Live Band
            </p>
            <p class="text-white headerlarge me-2 ms-2">
                Untuk Event Anda!
            </p>
        </div>
        <img src="/asset/header-home.png" alt="...">
    </div>

    <!-- About -->
    <div class="container pb-3 pt-3">
        <div class="row about-section justify-content-center">
            <div class="col-md-10 mt-5 pt-md-5">
                <p class="header1 text-center">
                    Biografi
                </p>
                <p class="body1 text-center mt-5 mb-5">
                    Kami adalah agensi musik yang menyediakan wadah untuk live music, entertainment, musisi untuk setiap
                    kesempatan. Dari musisi café, live wedding band hingga jazz band. Kami pun telah memilih talenta
                    terbaik dibidangnya.
                </p>
            </div>
            <div class="button text-center mb-5 pb-md-5">
                <a href="#" class="btn btn-1 pe-5 ps-5 pt-2 pb-2 mt-3">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- list-band -->
    <div class="listband-section pb-md-3 pt-md-3">
        <div class="container">

            <!-- Header List Band -->
            <div class="row justify-content-center">
                <div class="col mt-5 mb-5 pt-5">
                    <p class="header1 text-center">
                        List Band Terbaik Kami
                    </p>
                    <p class="body1 text-center mt-2 mb-5">
                        Akordmusic Production selalu memastikan band dengan kualitas terjamin dan Anda pasti mendapatkan
                        kualitas band terbaik di Bali. Kita juga memiliki banyak pilihan band yang tersedia dengan gaya
                        band nya masing-masing sesuai kebutuhan Anda. Jadi, Anda bisa memilih band dengan kebutuhan yang
                        Anda inginkan.
                    </p>
                </div>
            </div>

            <!-- Card Band -->
            <div class="row card-band">
                <?php foreach ($band as $b) : ?>
                    <div class="col-md-4 mb-5 pb-5">
                        <div class="card">
                            <img src="/asset/<?= $b['header_img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title text-center header2"><?= $b['name']; ?></p>
                                <div class="row justify-content-center">
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <i class="bi bi-geo-alt me-1"></i>
                                        <p class="body1 ms-1">Denpasar</p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <div class="me-1">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p class="body1 text-end ms-1">(0)</p>
                                    </div>
                                </div>
                                <p class="card-title text-center header3">IDR <?= $b['price']; ?></p>
                            </div>
                            <ul class="list-group list-group-flush pb-2 pt-2">
                                <li class="list-group-item">
                                    <p class="text-center deskripsi">
                                        <?= $b['short_description']; ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="card-body align-self-center button">
                                <a href="/detailband/<?= $b['slug']; ?>" class="btn btn-1 pe-5 ps-5 pt-2 pb-2">Lihat
                                    Profil</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Ide dan Berita -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col mt-5 pt-5 pb-5">
                <p class="header1 text-center">
                    Ide & Berita
                </p>
            </div>
        </div>

        <div class="row justify-content-between news">
            <div class="col mb-5 pb-5 right">
                <?php foreach ($news as $n) : ?>
                    <div class="card mb-3">
                        <a href="/news/<?= $n['id']; ?>" class="nav-link">
                            <div class="row g-0 justify-content-between">
                                <div class="col-10">
                                    <div class="card-body">
                                        <p class="card-text header3 mb-1 title"><?= $n['judul']; ?></p>
                                        <p class="card-text body2 deskripsi">
                                            <?= $n['deskripsi']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-1 align-self-center me-3">
                                    <div class="card-body">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <!-- Kenapa Kami Section -->
    <div class="kenapakami-section">
        <div class="container">
            <div class="row pb-5 pt-5">
                <div class="col pb-5 pt-5">
                    <p class="header2">
                        Kenapa Harus Akordmusic ?
                    </p>
                    <div class="d-flex">
                        <i class="bi bi-check-circle"></i>
                        <p class="body1 ms-3">
                            Ratusan review dari pelanggan setia kami
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-check-circle"></i>
                        <p class="body1 ms-3">
                            Kontrak terpercaya dari kami
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-check-circle"></i>
                        <p class="body1 ms-3">
                            Pilihan band terbaik dan langsung diseleksi oleh tim kami
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-check-circle"></i>
                        <p class="body1 ms-3">
                            Kemudihan booking dan transaksi
                        </p>
                    </div>
                    <div class="button mb-5">
                        <a href="#" class="btn btn-1 pe-5 ps-5 pt-2 pb-2 mt-3">
                            Selanjutnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>