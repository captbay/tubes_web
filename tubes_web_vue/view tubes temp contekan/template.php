<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Youtube Embed JavaScript -->
    <script src="/js/youtube-play.js"></script>

    <!-- Default CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="/asset/favicon.ico" type="image/gif">

    <title><?= $title; ?></title>

</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container pt-1 pb-1">
            <a class="navbar-brand fw-bold text-light logo" href="/">
                <img src="/asset/logo.png" alt="" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-light fs-3"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="/daftarband">Daftar Band</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="/bantuan">Bantuan</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="/kontak">Kontak</a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-4 me-4">
                        <a href="#" class="nav-link d-flex align-items-center">
                            (0)
                            <i class="bi bi-heart ms-2 text-danger"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
    <!-- Navigation Bar End -->



    <!-- CONTENT START -->
    <?= $this->renderSection('content'); ?>
    <!-- CONTENT END -->


    <!-- Footer -->
    <footer class="global-footer">
        <div class="container">
            <div class="logo">
                <a href=""><img src="/asset/logo.png" alt=""></a>
            </div>
            <div class="container-footer">
                <!-- SOSIAL MEDIA -->
                <div class="container-footer-1">
                    <div class="header-footer">
                        <p>SOSIAL MEDIA</p>
                    </div>
                    <hr class="footer-line">
                    <div class="body1">
                        <a href="https://www.instagram.com/akordmusic_/" class="nav-link">
                            <p>
                                <i class="bi bi-instagram"></i> Instagram
                            </p>
                        </a>
                        <!-- <a href="" class="nav-link">
                            <p>
                                <i class="bi bi-facebook"></i> Facebook
                            </p>
                        </a> -->
                        <!-- <a href="" class="nav-link">
                            <p>
                                <i class="bi bi-twitter"></i> Twitter
                            </p>
                        </a> -->
                        <a href="https://www.youtube.com/channel/UCBW2S4-RZ7LnfmfoTfS-pjw" class="nav-link">
                            <p>
                                <i class="bi bi-youtube"></i> Youtube
                            </p>
                        </a>
                    </div>
                </div>
                <!-- <div class="container-footer-1">
                    <div class="header-footer">
                        <p>CLIENTS</p>
                    </div>
                    <hr class="footer-line2">
                    <div class="body1">
                        <a href="" class="nav-link">
                            <p>Janji Jiwa Group</p>
                        </a>
                        <a href="" class="nav-link">
                            <p>NAU Indonesia</p>
                        </a>
                        <a href="" class="nav-link">
                            <p>Sembaga Coffee</p>
                        </a>
                        <a href="" class="nav-link">
                            <p>Tessera.Lab</p>
                        </a>
                    </div>
                </div> -->
                <div class="container-footer-1">
                    <div class="header-footer">
                        <p>LAYANAN KAMI</p>
                    </div>
                    <hr class="footer-line3">
                    <div class="body1">
                        <a href="/daftarband" class="nav-link">
                            <p>Band</p>
                        </a>
                        <!-- <a href="" class="nav-link">
                            <p>DuoKustik</p>
                        </a>
                        <a href="" class="nav-link">
                            <p>TrioKustik</p>
                        </a>
                        <a href="" class="nav-link">
                            <p>Full Band</p>
                        </a> -->
                    </div>
                </div>
                <div class="container-footer-1">
                    <div class="header-footer">
                        <p>LINK TAMBAHAN</p>
                    </div>
                    <hr class="footer-line4">
                    <div class="body1">
                        <a href="/tentangkami" class="nav-link">
                            <p>About Us</p>
                        </a>
                        <!-- <a href="" class="nav-link">
                            <p>Category</p>
                        </a> -->
                        <a href="/bantuan" class="nav-link">
                            <p>Support</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <div class="body2">
                    <p>©️ 2022 Akordmusic Production Ltd</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- Ajax Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>