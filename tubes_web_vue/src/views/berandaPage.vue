<template>
    <div class="p-0"></div>

    <!-- Header -->
    <div class="bg-image">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 85vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <h1 class="text-white mb-0">Cari Band, Komika dan Live Band Untuk Event Anda!</h1>
            </div>
        </div>
    </div>

    <!-- Biografi -->
    <div class="p-5"></div>
    <div class="container-fluid bg-white">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">Biografi</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-5">Kami adalah agensi musik yang menyediakan wadah untuk live music,
                    entertainment, musisi untuk setiap kesempatan. Dari musisi café, live wedding band hingga jazz band.
                    Kami pun telah memilih talenta terbaik dibidangnya.</p>
                    <router-link :to="{ name: 'tentangKami' }" class="nav-link">
                        <button class="btn btn-success">
                            Find Out More
                        </button>
                    </router-link>
            </div>
        </div>
    </div>


    <!-- List Event -->
    <div class="p-5"></div>
    <div class="container-fluid bg-light">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">List Event Terbaik Kami</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-1">Akordmusic Production selalu memastikan band dengan kualitas terjamin dan
                    Anda
                    pasti mendapatkan kualitas band terbaik di Bali. Kita juga memiliki banyak pilihan band yang
                    tersedia
                    dengan gaya band nya masing-masing sesuai kebutuhan Anda. Jadi, Anda bisa memilih band dengan
                    kebutuhan
                    yang Anda inginkan.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://cdn.antaranews.com/cache/730x487/2022/09/30/KOTAK_0316.jpg" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Band 1</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">More</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://cdn.antaranews.com/cache/730x487/2020/10/02/e9018782-0ef5-446e-83d0-3db221524a96.jpg"
                                alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Komika A</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">More</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://telltaletv.com/wp-content/uploads/2018/01/The-Magicians-Season-3-Episode-3_NUP_179567_0093-730x487.jpg"
                                alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Magician C</h5>
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. Semper duis tellus
                                    suspendisse
                                    felis, odio vitae ultrices quam placerat. Est nisl massa placerat facilisis etiam
                                    vulputate
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ide & Berita -->
    <div class="p-5"></div>
    <div class="container-fluid bg-white">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-dark font-weight-bold">Ide & Berita</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
                <p class="text-white-75 mb-5">Kami adalah agensi musik yang menyediakan wadah untuk live music,
                    entertainment, musisi untuk setiap kesempatan. Dari musisi café, live wedding band hingga jazz band.
                    Kami pun telah memilih talenta terbaik dibidangnya.</p>
                    <router-link :to="{ name: 'kontak' }" class="nav-link">
                        <button class="btn btn-success">
                            Find Out More
                        </button>
                    </router-link>
            </div>
        </div>
    </div>

    <!-- Kenapa Kami? -->
    <div class="p-5"></div>
    <div class="container-fluid bg-light">
        <div class="container bg-light">
            <div class="col-lg-12 align-self-end">
                <h1 class="text-dark font-weight-bold">Kenapa Harus Layanan Kami?</h1>
            </div>
            <div class="col-lg-10 align-self-baseline">
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
                <router-link :to="{ name: 'bantuan' }" class="nav-link">
                        <button class="btn btn-success">
                            Find Out More
                        </button>
                </router-link>
                <p></p>
            </div>
        </div>
    </div>
</template>

<style>
    .bg-image {
        background-image: url('../assets/event.png');
        background-size: cover;
    }
</style>