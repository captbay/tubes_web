<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="news">

    <div class="container">
        <div class="row my-5 py-md-3">

            <!-- Left Side -->
            <div class="left col-md-8 pe-3 mb-2">

                <!-- Judul -->
                <h2 class="fw-bold amiri"><?= $news['judul']; ?></h2>

                <!-- Tanggal -->
                <p class="text-secondary text-opacity-50"><?= $news['created_at']; ?></p>

                <!-- Foto Berita -->
                <img src="/asset/<?= $news['foto']; ?>" class="img-fluid mb-2 rounded" alt="...">

                <!-- Isi Content -->
                <p class="pe-md-5 mt-2 mb-5 isi" style="text-align: justify;">
                    <?= $news['deskripsi']; ?>
                </p>

            </div>

            <!-- Right Side -->
            <div class="right col-md-4 ps-3 mb-2">
                <!-- Berita Lainnya -->
                <p>Berita Lainnya</p>
                <hr>

                <!-- List Berita -->
                <?php foreach ($newsAll as $n) : ?>
                    <a href="#" class="nav-link">
                        <div class="berita card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="img col-4">
                                    <img src="/asset/<?= $n['foto']; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <p class="card-title fw-bold title header4"><?= $n['judul']; ?></p>
                                        <p class="card-text text-secondary deskripsi body2"><?= $n['deskripsi']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>