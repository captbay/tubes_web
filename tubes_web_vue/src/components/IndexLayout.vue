<template>
    <!-- Header -->
    <header>
        <nav>
            <ul class="menu">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Daftar Band</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Bantuan</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
    
    <div class="banner">
        <div class="wrapper">
            <div class="content">
                <h2>Cari Musisi dan Live Band Untuk Event Anda!</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, aliquam iure? Hic quisquam provident aut!</p>            
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="single-box">
                        <h2>Social Media</h2>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-6 col-md-4">
                    <div class="single-box">
                        <h2>Layanan Kami</h2>
                    <ul>
                        <li><a href="#">Band</a></li>
                        <li><a href="#">Pesulap</a></li>
                        <li><a href="#">Komika</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-6 col-md-4">
                    <div class="single-box">
                        <h2>Link Tambahan</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
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
    .socials i {
        font-size: 18px;
        margin-right: 15px;
    }
</style>
