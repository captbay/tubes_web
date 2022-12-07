<template>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Vuetify -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link href="https://unpkg.com/vue@3/dist/vue.global.js">
    
    <!-- Ajax -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Youtube Embed JavaScript -->
    <link href="/js/youtube-play.js">

    <!-- Default CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="/public/favicon.ico" type="image/gif">
        
    <!-- Header -->
    <header class="d-flex justify-content-center py-3 bg-dark">
      <ul class="nav nav-pills">
        <li class="nav-item"> 
            <router-link :to="{name: 'beranda'}" class="nav-link text-light">Beranda</router-link> 
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Daftar Event</a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li>
                <router-link :to="{name: 'tentangKami'}" class="dropdown-item text-light">Band</router-link>
            </li>
            <li>
                <router-link :to="{name: 'kontak'}" class="dropdown-item text-light">Stand Up</router-link>
            </li>
            <li>
                <router-link :to="{name: 'pesulapIndex'}" class="dropdown-item text-light">Magician</router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <router-link :to="{name: 'tentangKami'}" class="nav-link text-light">Tentang Kami</router-link>
        </li>
        <li class="nav-item">
            <router-link :to="{name: 'bantuan'}" class="nav-link text-light">Bantuan</router-link>
        </li>
        <li class="nav-item"> 
            <router-link :to="{name: 'kontak'}" class="nav-link text-light">Kontak</router-link> 
        </li> 
        <li class="nav-item">
            <router-link :to="{name: 'masuk'}" class="nav-link text-light">Masuk</router-link> 
        </li> 
      </ul>
      <form class="d-flex">
            <router-link :to="{name: 'masuk'}" class="justify-content-right bi bi-bag-plus-fill"></router-link> 
      </form>
      
    </header>

    <router-view></router-view>
    
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
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
                            Our Services
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Band</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Stand Up</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Magician</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Support</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Contact</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="bi bi-house-door-fill"></i> New York, NY 10012, US</p>
                        <p><i class="bi bi-envelope-fill"></i> info@example.com</p>
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
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ampgroup.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</template>

<style>
    /* Style Header */
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
    }
    nav {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-around;
        align-items: center;
        min-height: 10vh;
        background: #1d1d1d;
    }

    .menu {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-around;
        width: 50%;
    }
    .menu li {
        list-style: none;
    }
    .menu a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        padding: 30px;
        font-weight: 600;
        transition: .9s;
    }
    .menu a:hover {
        letter-spacing: 2px;
    }
    .bar {
        display: none;
        cursor: pointer;
    }
    .bar div {
        width: 25px;
        height: 3px;
        background-color: #fff;
        margin: 5px;
        transition: all .5s ease;
    }
    .nav-active {
        transform: translateX(-100%);
    }
    .bar-active .bar-1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }
    .bar-active .bar-2 {
        opacity: 0;
    }
    .bar-active .bar-3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }
    .banner {
        height: 100vh;
        background-size: cover;
        background-position: center;
    }
    .content h2 {
        font-family: alfa slab one;
        color: #000000;
        font-size: 60px;
    }
    .content p {
        width: 50%;
        color: rgba(0, 0, 0, 0.6);
        line-height: 2;
    }
    .btn a {
        text-decoration: none;
        background: #ef0554;
        padding: 15px 10px;
        display: inline-block;
        color: #fff;
        margin-top: 15px;
        border-radius: 50px;
        width: 130px;
        text-align: center;
    }
    .wrapper {
        width: 1060px;
        margin: auto;
        padding-top: 12%;
    }

    /* Style Footer */
    footer {
	background: #1d1d1d;
	padding: 86px 0;
    }
    .single-content {
        text-align: center;
        padding: 115px 0;
    }
    .single-box p {
        color: #fff;
        line-height: 1.9;
    }
    .single-box h3 {
        font-size: 16px;
        font-weight: 700;
        color: #fff;
    }
    .single-box .card-area i {
        color: #ffffff;
        font-size: 20px;
        margin-right: 10px;
    }
    .single-box ul {
        list-style: none;
        padding: 0;
    }
    .single-box ul li a {
        text-decoration: none;
        color: #fff;
        line-height: 2.5;
        font-weight: 100;
    }
    .single-box h2 {
        color: #fff;
        font-size: 20px;
        font-weight: 700;
    }
    #basic-addon2 {
        background: #fe1e4f;
        color: #fff;
    }

    .btn-bd-primary {
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet);
        --bs-btn-border-color: var(--bd-violet);
        --bs-btn-border-radius: .5rem;
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #{shade-color($bd-violet, 10%)};
        --bs-btn-hover-border-color: #{shade-color($bd-violet, 10%)};
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #{shade-color($bd-violet, 20%)};
        --bs-btn-active-border-color: #{shade-color($bd-violet, 20%)};
    }
    
</style>
