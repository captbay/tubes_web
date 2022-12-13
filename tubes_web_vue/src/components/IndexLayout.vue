<template>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Vuetify -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link href="https://unpkg.com/vue@3/dist/vue.global.js">

    <!-- Ajax -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Youtube Embed JavaScript -->
    <link href="/js/youtube-play.js">

    <!-- Default CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="/public/favicon.ico" type="image/gif">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top text-light">
        <div class="container-fluid pt-1 pb-1">
            <a class="navbar-brand fw-bold text-light logo ms-5" href="/">
                <img src="../assets/logo.png" alt="" style="width: 60px; height: 60px;">
            </a>
            <button class="navbar-toggler text-light me-5 navbar-toggler-icon" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true"
                aria-label="Toggle navigation">
            </button>
            <div class="navbar-collapse collapse ms-5" id="navbarResponsive" style="">
                <ul class="navbar-nav mx-auto my-2 my-lg-0 ">
                    <li class=" nav-item">
                        <router-link :to="{ name: 'beranda' }" class="nav-link text-light">Beranda</router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Daftar Event</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <router-link :to="{ name: 'band' }" class="dropdown-item text-light">Band</router-link>
                            </li>
                            <li>
                                <router-link :to="{ name: 'standUp' }" class="dropdown-item text-light">Stand
                                    Up</router-link>
                            </li>
                            <li>
                                <router-link :to="{ name: 'pesulapIndex' }"
                                    class="dropdown-item text-light">Magician</router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'tentangKami' }" class="nav-link text-light">Tentang
                            Kami</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'bantuan' }" class="nav-link text-light">Bantuan</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'kontak' }" class="nav-link text-light">Kontak</router-link>
                    </li>
                </ul>
                <div class="d-flex my-2 my-lg-0 ">
                    <router-link :to="{ name: 'masuk' }" class="nav-link">
                        <button class="btn btn-success">
                            <i class="bi bi-box-arrow-in-right text-light"></i>
                            Login
                        </button>
                    </router-link>
                    <router-link :to="{ name: 'keranjang' }" class="nav-link px-2">
                        <button class="btn btn-success">
                            <i class="bi bi-bag-plus-fill text-light"></i>
                            Keranjang
                        </button>
                    </router-link>
                </div>
            </div>
        </div>
    </nav>

    <router-view></router-view>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-light">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>AMP Group
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Layanan kami
                        </h6>
                        <p>
                            <router-link :to="{ name: 'band' }" class="nav-link text-light">Band</router-link>
                        </p>
                        <p>
                            <router-link :to="{ name: 'standUp' }" class="nav-link text-light">Stand Up</router-link>
                        </p>
                        <p>
                            <router-link :to="{ name: 'pesulapIndex' }" class="nav-link text-light">Pesulap</router-link>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Link
                        </h6>
                        <p>
                            <router-link :to="{ name: 'tentangKami' }" class="nav-link text-light">Tentang Kami</router-link>
                        </p>
                        <p>
                            <router-link :to="{ name: 'bantuan' }" class="nav-link text-light">Bantuan</router-link>
                        </p>
                        <p>
                            <router-link :to="{ name: 'kontak' }" class="nav-link text-light">Kontak</router-link>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                        <p><i class="bi bi-house-door-fill"></i> Yogyakarta, Babarsari 55281, Indonesia</p>
                        <p><i class="bi bi-envelope-fill"></i> ampgroup@gmail.com</p>
                        <p><i class="bi bi-telephone-fill"></i> + 01 234 567 88</p>
                        <p><i class="bi bi-telephone-fill"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="/">ampgroup.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</template>

<style>

</style>
