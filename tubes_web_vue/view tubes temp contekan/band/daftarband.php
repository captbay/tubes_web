<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="daftarband">


    <!-- Header -->
    <div class="row text-center justify-content-center align-items-center jumbotron" style="position: relative;">
        <div class="text-header row justify-content-center">
            <p class="text-white headerlarge me-2 ms-2">Temui Band-Band Keren Kami!</p>
            <p class="text-white header3 col-md-8 me-2 ms-2">
                Akordmusic Production selalu memastikan band dengan kualitas terjamin dan Anda pasti mendapatkan kualitas band terbaik di Bali. Kita juga memiliki banyak pilihan band yang tersedia dengan gaya band nya masing-masing sesuai kebutuhan Anda. Jadi, Anda bisa memilih band dengan kebutuhan yang Anda inginkan.
            </p>
        </div>
        <img src="/asset/header-daftarband.png" alt="...">
    </div>

    <div class="container">

        <!-- Search Bar -->
        <div class="row height d-flex justify-content-center align-items-center mb-5 mt-5">
            <div class="col-md-8">
                <div class="search">
                    <input type="text" class="form-control" placeholder="Cari band yang anda inginkan">
                    <button class="search-btn"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>


        <!-- Card Band -->
        <div class="row card-band">
            <?php foreach ($band as $b) : ?>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="/asset/<?= $b['header_img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title text-center header2"><?= $b['name']; ?></p>
                            <div class="row justify-content-center">
                                <div class="col-xxl-5 d-flex justify-content-center">
                                    <i class="bi bi-geo-alt me-1"></i>
                                    <p class="body1 ms-1">Denpasar</p>
                                </div>
                                <div class="col-xxl-5 d-flex justify-content-center">
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
                            <a href="/detailband/<?= $b['slug']; ?>" class="btn btn-1 pe-5 ps-5 pt-2 pb-2">Lihat Profil</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>

<?= $this->endSection(); ?>