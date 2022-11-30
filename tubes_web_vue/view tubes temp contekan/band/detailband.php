<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="detailband">

    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="/asset/<?= $band['header_img']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title header1"><?= $band['name']; ?></p>
                                <p class="card-title header3">IDR <?= $band['price']; ?></p>
                                <p class="card-text body1">
                                    <?= $band['short_description']; ?>
                                </p>
                                <div class="button">
                                    <!-- <a href="/detailband" class="btn-2 btn pe-3 ps-3 pt-2 pb-2 mt-3">
                                        <i class="bi bi-heart ms-2 text-danger"></i>
                                        Tambah Keranjang
                                    </a> -->
                                    <a href="/bookingband/<?= $band['slug']; ?>" class="btn-1 btn pe-3 ps-3 pt-2 pb-2 mt-3">
                                        Booking Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid">
        <div class="row about-section justify-content-center">
            <div class="col-md-8 mt-5 mb-5 pt-md-5 pb-md-5">
                <p class="header1 text-center">
                    Biografi
                </p>
                <p class="body1 text-center mt-5 mb-md-5">
                    <?= $band['description']; ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Youtube Section -->
    <div class="container">
        <div class="row youtube-card">
            <div class="col mt-5 mb-5 pt-5 pb-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9">
                                <iframe class="rounded-start youtube-play" src="<?= $youtube[0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <!-- img-fluid rounded-start -->
                        </div>
                        <div class="col-md-5 align-self-center">
                            <div class="card-body p-5">
                                <?php
                                $lng = count($youtube);
                                for ($y = 0; $y < $lng; $y++) :
                                ?>
                                    <div class="card mb-3 youtube-sub-card">
                                        <div class="row g-0 justify-content-between youtube-button" data-vidurl="<?= $youtube[$y]; ?>?autoplay=1">
                                            <div class="col-10">
                                                <div class="card-body">
                                                    <p class="card-text body1"><?= $judul_youtube[$y]; ?></p>
                                                    <p class="card-text body2"><?= $penyanyi_youtube[$y]; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-1 align-self-center me-3">
                                                <div class="card-body">
                                                    <i class="bi bi-play-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Listening Section -->
    <div class=" listening-section pb-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5 mb-md-5 pt-md-5 pb-md-5">
                    <p class="header1 text-center">
                        Dengarkan
                    </p>
                    <p class="body1 text-center mt-2 mb-5">
                        Click on the song name to play the mp3, or download to your device using the links on the right.
                    </p>
                </div>
            </div>
        </div>

        <div class="container pb-md-5">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <img src="/asset/<?= $band['sub_img']; ?>" class="img-fluid rounded" alt="">
                </div>
                <div class="col-md-8 mb-md-3">
                    <?php
                    $lng = count($audio);
                    for ($y = 0; $y < $lng; $y++) :
                    ?>
                        <div class="card mb-3 pt-2" style="background-color: #F1F3F4;">
                            <p class="body1 mb-0 ms-4"><?= $judul_audio[$y]; ?> - <?= $penyanyi_audio[$y]; ?></p>
                            <div class="row g-0 justify-content-between">
                                <audio controls style="background-color: #F1F3F4; border-radius:5px;" preload="none">
                                    <source src="/audio/<?= $audio[$y]; ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Information Package -->
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5 pt-md-5">
                <p class="header1 text-center">
                    Informasi Paket
                </p>
                <p class="body1 text-center mt-2 mb-5">
                    Scroll down the artist repertoire below to discover the range of music covered. Looking for something specific? Type in the artist or song name to search through the list.
                </p>
            </div>
        </div>

        <div class="row mb-5 pb-md-5">
            <div class="col-md">
                <p class="header2">
                    Standar Package
                </p>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Tampil selama 2 x 60 menit dengan istirahat tiap setnya 1 jam
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Menerima request lagu secara live
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Datang 1 jam sebelum acara untuk persiapan
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Terdapat teknisi audio dan spotlight
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-check-circle"></i>
                    <p class="body1 ms-3">
                        Peralatan musik bersertifikat PAT
                    </p>
                </div>
            </div>

            <div class="col-md">
                <p class="header2">
                    Options
                </p>
                <div class="card mb-3">
                    <a href="#" class="nav-link">
                        <div class="row g-0 justify-content-between">
                            <div class="col">
                                <div class="card-body">
                                    <p class="card-text body1">4-Piece</p>
                                    <p class="card-text body2 text-secondary">Vocals, Piano, Double Bass, Drums</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card mb-3">
                    <a href="#" class="nav-link">
                        <div class="row g-0 justify-content-between">
                            <div class="col">
                                <div class="card-body">
                                    <p class="card-text body1">5-Piece</p>
                                    <p class="card-text body2 text-secondary">Vocals, Piano, Double Bass, Sax, Drums</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center pb-md-5 mb-5">
            <div class="col">
                <div class="button text-center">
                    <a href="/bookingband/<?= $band['slug']; ?>" class="btn-1 btn pe-3 ps-3 pt-2 pb-2 mt-3 ms-md-3">
                        Booking Sekarang
                    </a>
                </div>
            </div>
        </div>

    </div>



</section>

<?= $this->endSection(); ?>