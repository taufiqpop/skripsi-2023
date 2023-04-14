<!DOCTYPE html>

<!-- Teknisi On Air 2021 (Taufiq Pop) -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
    Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,
    700i" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>/css/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Mobile Nav Toggle Button -->
    <i class="bi bi-list mobile-nav-toggle"></i>

    <!-- Header -->
    <header id="header" stats="false">
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="img/RapmaFM Header.png " alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html" title="Rapma FM">Rapma FM</a></h1>
            </div>
            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <!-- <li><a href="tiket-rapmafest.html" target="_blank" class="nav-link scrollto"><i class="bx bx-dollar" title="Buy Tiket Rapmafest #8" style="color: #FFD700;"></i>
                <strong><span style="color: #FFD700;">BUY TICKET RAPMAFEST #8</span></strong></a></li> -->
                    <!-- <li><a href="open-recruitment.html" target="_blank" class="nav-link scrollto"><i class="bx bx-radio" title="Daftar UKM Rapma FM" style="color: #00FF00;"></i>
                <strong><span style="color: #00FF00;">Daftar UKM Rapma FM</span></strong></a></li> -->
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home" title="Home"></i>
                            <span>Home</span></a></li>
                    <li><a href="#structure" class="nav-link scrollto"><i class="bx bx-user" title="Structure"></i>
                            <span>Structure</span></a></li>
                    <li><a href="#program" class="nav-link scrollto"><i class="bx bx-microphone" title="Program"></i>
                            <span>Program</span></a></li>
                    <li><a href="#chart" class="nav-link scrollto"><i class="bx bx-music" title="Top Chart"></i>
                            <span>Top Chart</span></a></li>
                    <li><a href="#event" class="nav-link scrollto"><i class="bx bx-calendar-event" title="Event"></i>
                            <span>Event</span></a></li>
                    <li><a href="#achievement" class="nav-link scrollto"><i class="bx bx-trophy" title="achievement"></i>
                            <span>Achievement</span></a></li>
                    <li><a href="#news" class="nav-link scrollto"><i class="bx bx-news" title="Rapma News"></i>
                            <span>Rapma News</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope" title="Contact"></i>
                            <span>Contact</span></a></li>
                </ul>
            </nav>
            <audio id="demosMenu" controls autoplay style="width: auto; height: 25px;">
                <source src="https://c2.siar.us:9999/stream" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <!-- <iframe src="https://c2.siar.us/public/rapmafm/embed" frameborder="0" 
        allowtransparency="true" style="width: 100%; min-height: 150px; border: 0;"></iframe> -->
        </div>
    </header>

    <!-- Home -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container">
            <h1>Rapma FM</h1>
        </div>
        <div class="hero-container">
            <h6><span class="typed" data-typed-items="The First Edutainment Channel In Solo"></span></h6>
        </div>
        <div class="social-links">
            <div class="d-flex flex-column">
                <div class="profile">
                    <div class="social-links mt-3 text-center">
                        <a href="https://twitter.com/rapmafmums" target="_blank" class="twitter" title="Twitter">
                            <i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/umsrapmafm/" target="_blank" class="facebook" title="Facebook">
                            <i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/rapmafm/" target="_blank" class="instagram" title="Instagram">
                            <i class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCDsAfuUjcWxydKzUF4QI0yg" target="_blank" class="youtube" title="Youtube">
                            <i class="bx bxl-youtube"></i></a>
                        <a href="https://open.spotify.com/show/3Gy8RYWni0Tsr0eF6zxfUB" target="_blank" class="spotify" title="Spotify">
                            <i class="bx bxl-spotify"></i></a>
                        <a href="https://wa.me/+6285640316175" target="_blank" class="whatsapp" title="Whatsapp">
                            <i class="bx bxl-whatsapp"></i></a>
                        <a href="http://rapmafm.ukm.ums.ac.id/" target="_blank" class="blogger" title="Blog">
                            <i class="bx bxl-blogger"></i></a>
                        <br>
                        <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=vxw1531h&openerPlatform=webview&openerKey=webview%3AunifiedSearch" target="_blank" class="line" title="Line">
                            <i><img src="img/Line.svg" height="20px" weight="20px"></i></a>
                        <a href="https://vt.tiktok.com/ZSJrHdqTV/" target="_blank" class="tiktok" title="TikTok">
                            <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                                    <path fill="#fff" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z" />
                                    <rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" />
                                </svg></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <!-- About -->
        <section id="about" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">About</h2>
                    <p style="text-align: justify; text-indent: 60px;">
                        RAPMA FM sebagai Radio komunitas kampus dan satu-satunya media elektronik yang dimiliki oleh
                        Universitas Muhammadiyah Surakarta mempunyai peranan sebagai media informasi, hiburan, dan
                        dakwah dengan istilah yang dipakai untuk aplikasi siar yaitu smart, fun, and pure dengan
                        slogan “The First Edutainment Channel In Solo”. RAPMA FM sendiri sebagai salah satu UKM
                        memberikan kontribusi untuk Universitas Muhammadiyah Surakarta dan telah diberikan kepercayaan
                        untuk mempublikasikan dan menginformasikan tentang segala hal mengenai seputaran dunia kampus
                        dan hasil-hasil kampus Universitas Muhammadiyah Surakarta kepada mahasiswa, masyarakat luar
                        ataupun khalayak ramai.
                        <br><br>
                        <center>
                            <a href="http://rapmafm.ukm.ums.ac.id/p/about-us.html" target="_blank" class="btn btn-success">Read More</a>
                        </center>
                </div>
            </div>
        </section>

        <!-- Structure of Organization -->
        <section id="structure" class="portfolio-details-slider">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">Structure of Organization</h2>
                </div>
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/GMPA.png" class="img-fluid" alt="GMPA" data-aos="fade-up">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Umum.png" class="img-fluid" alt="Divisi Umum" data-aos="fade-up">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Kepenyiaran.png" class="img-fluid" alt="Divisi Kepenyiaran" data-aos="fade-up">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Marketing.png" class="img-fluid" alt="Divisi Marketing" data-aos="fade-up">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Personalia.png" class="img-fluid" alt="Divisi Personalia" data-aos="fade-up">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col section-bottom-button" data-aos="fade-up">
                        <img src="img/Crew.png" class="img-fluid" alt="Crew">
                    </div>
                </div>
            </div>
        </section>

        <!-- Program -->
        <section id="program" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">Program</h2>
                    <h6 style="text-align: center; color: #008C52;">Broadcast & Podcast</h6>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active" title="All Program">All</li>
                            <li data-filter=".filter-app" title="Regular Program">Regular Program</li>
                            <li data-filter=".filter-card" title="Special Program">Special Program</li>
                        </ul>
                    </div>
                </div>
                <!-- Regular Program -->
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/BasoSapi.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/BasoSapi.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/0H0UTyvK4su14jJVDcfk2X?si=0e221fd2423c4e70" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/11N1.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/11N1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/2xZvhNVfFhs729lHLLKEbs?si=70f8296146fb44e0" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/Rapmanesia.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Rapmanesia.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/7rl9eIYGm9jOpvPd21PobJ?si=a2ffbdd78c874a9e" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/TGV.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/TGV.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/0wJCTRfCwIqT7RBrAENsux?si=d5982fb80c624fbf" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/THR.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="img/THR.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://www.instagram.com/p/CNo82DepmKo/?igshid=lr40gy7v92is" target="_blank"><i class="bx bxl-instagram" title="Open Instagram"></i></a>
              </div>
            </div>
          </div> -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/KhasanahPetang.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/KhasanahPetang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/2OpCjIc6YBl883Aw3qJ1bQ?si=zW2mHW2VToeFD_1M_5L7jg" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/MusicBox.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/MusicBox.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/7DvP3sMJa5LpgLSfkAR2mm?si=3a09928028b94df3" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/Afterday.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Afterday.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/3ED6VNFrqqjrAJd2TdQDso?si=Oq_TJuU3SKWsPObAYSO1BQ" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/TOP15.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/TOP15.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/3SzzwZRfHLyEJFSdhM9gVW?si=b0ce528bac70443d" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="img/Rapmatalks.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Rapmatalks.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/0GTBdHxXfaJxVA2mxsegxQ?si=fca30f035610492d" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Special Program -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/MovieScreen.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/MovieScreen.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/0c3UrX8b5sVauco3iEXYNA?si=fa275c68c3834fd9" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/KingNQueen.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/KingNQueen.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/3UQz9EO6DUvuurHthAvlkI?si=9c9273e359c54c02" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/Indiezone.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Indiezone.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/1yxOYXK1bMWIs3tkpSUOIc?si=ca8a3dbee2454a7e" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/Teksas.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Teksas.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/6eSgHfMK6972yDe9Ch2o8F?si=800d1f78b93d4425" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/Merinding.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/Merinding.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/1T4gXy589d4nDZ820F0W2q?si=b43b7113efea4f2b" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/K-Arena.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/K-Arena.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/1dAcappKAmIOxcbZMjyHG9?si=fa7a3c9fab694581" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/SudutKampus.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/SudutKampus.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/5JCrqf2RRplT0WexV3UqOP?si=980ed3002a6e4946" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/NoSatnight.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/NoSatnight.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/2mru4VWHqOk0g702FerJDl?si=1ab330e8de2d41f9" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="img/ClassicNight.png" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/ClassicNight.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                                <a href="https://open.spotify.com/episode/55unnCEFHtseDyaKI9REcs?si=70cf567daa564741" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Chart -->
        <section id="chart">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">Rapma Top 15</h2>
                </div>
                <div class="row" data-aos="fade-in">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <h2 style="text-align: center; color: #008C52;">Top 15 Versi Indonesia</h2>
                            <iframe src="https://open.spotify.com/embed/playlist/0rj1HLftduTk5t2OC6t0XD?si=GgqgR4zfSZGfZj3mnjEd3g" width="100%" height="500" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <h2 style="text-align: center; color: #008C52;">Top 15 Versi Manca</h2>
                            <iframe src="https://open.spotify.com/embed/playlist/48GHvGhwDZFBL6X88c20Zd?si=IX3o5iOWTiOxA3xqw8lYGg" width="100%" height="500" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Event -->
        <section id="event" class="portfolio section-bg">
            <div class="row g-4 g-md-6">
                <div class="section-title">
                    <h2 style="text-align: center;">Event</h2>
                </div>
                <div class="col-6 col-md-6">
                    <div class="card-body">
                        <center>
                            <h2 class="card-title"><b>RAPMADAY #7</b></h2>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Rapmaday7.png" style="width:100%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="#" target="_blank" class="btn btn-dark disabled">See Event</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="card-body">
                        <center>
                            <h2 class="card-title"><b>RAPMAFEST #8</b></h2>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Rapmafest8.png" style="width:100%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="tiket-rapmafest.html" target="_blank" class="btn btn-success">See Event</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievement -->
        <section id="achievement">
            <div class="row g-2 g-md-4">
                <div class="section-title">
                    <h2 style="text-align: center;">Achievement</h2>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <br>
                        <center>
                            <h4 class="card-title">Juara 1 Lomba Siar<br>UNYFEST#7 2019<br></h4>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Lomba 2019.jpg" style="width:75%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="https://www.instagram.com/p/BwyOA9ehluQ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <br>
                        <center>
                            <h4 class="card-title">Juara 2 & 3 Lomba Siar<br>DISTAFEST 2020<br></h4>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Lomba 2020.jpg" style="width:75%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="https://www.instagram.com/p/B2N2MLPBCce/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <br>
                        <center>
                            <h4 class="card-title">Juara 3 Lomba<br>Metta Got Talent 2021<br></h4>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Lomba 2021-1.jpg" style="width:75%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="https://www.instagram.com/p/COFoXvQpqWi/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <br>
                        <center>
                            <h4 class="card-title">Juara 2 Lomba Siar<br>Galaksiar 2021<br></h4>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Lomba 2021-2.jpg" style="width:75%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="https://www.instagram.com/p/CPNZVp_pxEZ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <!-- Blank -->
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <br>
                        <center>
                            <h4 class="card-title">Juara Harapan Lomba Siar<br>Galaksiar 2021<br></h4>
                        </center>
                        <center>
                            <img class="card-img-top" src="img/Lomba 2021-3.jpg" style="width:75%">
                        </center>
                        <div class="card-body">
                            <center>
                                <a href="https://www.instagram.com/p/CPNZVp_pxEZ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rapma News -->
        <section id="news" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">Rapma News</h2>
                </div>
                <div class="row" data-aos="fade-in">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <a href="http://rapmafm.ukm.ums.ac.id/2021/10/keseruan-rapmafest-8-nostalgic-future.html" target="_blank">
                                <h4 style="text-align: center; color: black">KESERUAN RAPMAFEST #8<br>"NOSTALGIC FUTURE TO CREATE MIRACLE"</h4>
                            </a><img src="img/Blog4.png">
                            <p style="text-align: justify;">RAPMAFEST #8 yang bertajuk "NOSTALGIC FUTURE TO CREATE MIRACLE", RAPMAFEST #8 ini memiliki
                                serangkaian acara, yaitu perlombaan Voice Over, Lomba Siar, Webinar, sampai Virtual Concert. Di puncak acara
                                RAPMAFEST #8 yang<a href="http://rapmafm.ukm.ums.ac.id/2021/10/keseruan-rapmafest-8-nostalgic-future.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <a href="http://rapmafm.ukm.ums.ac.id/2021/04/rapmaday7-act-beyond-imagination.html" target="_blank">
                                <h4 style="text-align: center; color: black">RAPMADAY#7 <br>“ACT BEYOND IMAGINATION”</h4>
                            </a><img src="img/Blog3.png">
                            <p style="text-align: justify;">Kali ini kita akan menyapa CampusBrainers dengan event tahunan kita.
                                Tau dong apa Namanya, Yap Rapmaday. Nah acara tahunan kita kali ini berbeda dari tahun-tahun sebelumnya.
                                Rapmaday kali ini disiarkan langsung dari<a href="http://rapmafm.ukm.ums.ac.id/2021/04/rapmaday7-act-beyond-imagination.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-in">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <a href="http://rapmafm.ukm.ums.ac.id/2021/03/menyambung-silaturahmi-dengan.html" target="_blank">
                                <h4 style="text-align: center; color: black">Menyambung silaturahmi dengan Sarasehan Rapma FM 2021</h4>
                            </a><img src="img/Blog2.png">
                            <p style="text-align: justify;">Sarasehan Rapma FM tahun 2021 mengangkat tema Adventure
                                CampusBrainers, makannya ada tenda di foto panggung diatas hihi. Waaah seru dong? iyaa
                                CampusBrainers Sarase<a href="http://rapmafm.ukm.ums.ac.id/2021/03/menyambung-silaturahmi-dengan.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="row">
                            <a href="http://rapmafm.ukm.ums.ac.id/2021/02/kunjungan-tanpa-pertemuan-rapma-fm-ke.html" target="_blank">
                                <h4 style="text-align: center; color: black">Kunjungan tanpa pertemuan Rapma FM ke Geronimo FM</h4>
                            </a><img src="img/Blog1.png">
                            <p style="text-align: justify;">CampusBrainers !! Kami bakalan berbagi cerita tentang keseruan virtual study broadcast di Geronimo FM.
                                Karena kondisi pandemi kaya sekarang, mengharuskan cuma ada beberapa orang aja dari Rapma FM yang berangkat langsung ke
                                <a href="http://rapmafm.ukm.ums.ac.id/2021/02/kunjungan-tanpa-pertemuan-rapma-fm-ke.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a>
                            </p>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-align: center;">Contact</h2>
                </div>
                <div class="row" data-aos="fade-in">
                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-envelope" title="Email"></i>
                                <h4>Email</h4>
                                <p>
                                    umsrapmafm@gmail.com<br>
                                    radio.rapmafm@yahoo.co.id (Music Director)
                                </p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone" title="Whatsapp"></i>
                                <h4>Whatsapp</h4>
                                <p>
                                    <a href="https://wa.me/+62895343956772" target="_blank" style="color: #008C52;">Aqsal : 0895343956772 (MedPart)</a><br>
                                    <a href="https://wa.me/+6287737837843" target="_blank" style="color: #008C52;">Vania : 087737837843 (MC/M-Talent)</a><br>
                                    <!-- <a href="https://wa.me/+6285691615895" target="_blank" style="color: #008C52;">Maudy : 085691615895 (MedPart)</a><br> -->
                                    <!-- <a href="https://wa.me/+6283146061692" target="_blank" style="color: #008C52;">Falah : 083146061692 (MC/M-Talent)</a> -->
                                </p>
                            </div>
                            <div class="address">
                                <i class="bi bi-geo-alt" title="Location"></i>
                                <h4>Location</h4>
                                <p style="text-align: justify;">Sayap Kanan Perpustakaan Lantai Dasar, Kampus II
                                    Universitas Muhammadiyah Surakarta, Jalan Ahmad Yani Tromol Pos I Pabelan, Kartasura,
                                    Sukoharjo, Jawa Tengah, Indonesia, 57162.</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1722825033103!2d110.76873700406814!3d-7.556185825852349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a145b44ab2e7b%3A0x907e13e28374d39b!2sRapma+FM!5e0!3m2!1sid!2sid!4v1547644067180" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="mailto:umsrapmafm@gmail.com" method="POST" enctype="multipart/form-data" class="php-email-form">
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Telah Dikirim. Makasih CampusBrainers !!</div>
                            </div>
                            <script type="text/javascript">
                                function kirim() {
                                    alert('Pesan Anda Telah Dikirim. Makasih CampusBrainers !!');
                                }
                            </script>
                            <div class="text-center"><button type="submit" title="Send Message" onclick="kirim()">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright <a href="<?= base_url(); ?>/user" style="color:black;" target="_blank">
                    &copy;</a> <strong><span><?= date('Y'); ?> Rapma FM</span></strong>
            </div>
        </div>
    </footer>

    <!-- <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>/js/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/glightbox/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/js/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- <script src="js/php-email-form/validate.js"></script> -->
    <script src="<?= base_url(); ?>/js/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/typed.js/typed.min.js"></script>
    <script src="<?= base_url(); ?>/js/waypoints/noframework.waypoints.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Live Chat -->
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "7f97fe90-a0fb-408c-ad28-207bfce80ac6";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

    <!-- Main JavaScript -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>