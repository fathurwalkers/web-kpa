<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/themes/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets/themes/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/themes/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/themes/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/themes/assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/themes/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/themes/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/themes/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/themes/assets') }}/css/main.css" rel="stylesheet">

    <style>
        .img-cek {
            width: 1024px !important;
            height: 260px !important;
        }

        .section-header {
            text-align: center;
            padding-bottom: 35px !important;
        }
    </style>

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('assets/themes/assets') }}/img/logo.png" alt=""> -->
                <h1>
                    <img src="{{ asset('img') }}/logo-trans.png" alt="">
                </h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Beranda</a></li>
                    <li><a href="#">Tentang Ecoasphalt</a></li>
                    <li><a href="#">Pelajari</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Dokumentasi</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#contact">Hubungi Kami</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        {{-- <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2> --}}
                        <h2 data-aos="fade-down">
                            <img src="{{ asset('img') }}/logo-trans.png" alt="">
                        </h2>
                        <h3 style="color:white;">Selamat <span style="color:yellow;"> Datang </span></h3>
                        <p data-aos="fade-up">
                            PT. Kartika Prima Abadi (Ecoasphalt) merupakan perusahaan yang bergerak di dalam bidang
                            industri pengelolaan aspal yang sedang berkembang di Indonesia. <br />
                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url({{ asset('img') }}/banner1.jpeg)">
            </div>
            <div class="carousel-item active" style="background-image: url({{ asset('img') }}/banner2.jpeg)">
            </div>
            <div class="carousel-item active" style="background-image: url({{ asset('img') }}/banner3.jpg)">
            </div>
            <div class="carousel-item active" style="background-image: url({{ asset('img') }}/banner4.jpg)">
            </div>

            {{-- <div class="carousel-item active"
                style="background-image: url({{ asset('assets/themes/assets') }}/img/hero-carousel/hero-carousel-1.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/themes/assets') }}/img/hero-carousel/hero-carousel-2.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/themes/assets') }}/img/hero-carousel/hero-carousel-3.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/themes/assets') }}/img/hero-carousel/hero-carousel-4.jpg)">
            </div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/themes/assets') }}/img/hero-carousel/hero-carousel-5.jpg)">
            </div> --}}

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/DJI_0306.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Tentang Ecoasphalt</h3>
                        <p>
                            PT. Kartika Prima Abadi (Ecoasphalt) telah didirikan sejak Tahun 2015. Kami selalu berupaya
                            untuk memberikan mutu serta layanan terbaik dibidang konstruksi
                            jalan raya.
                        </p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Visi</a></h4>
                                <p>Menjadi perusahaan terdepan dalam produk olahan aspal buton demi mengembangkan
                                    asbuton menjadi
                                    sumber daya alam yang bernilai tinggi.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Misi</a></h4>
                                <p>Menjaga & mempertahankan kualitas produk sesuai dengan spesifikasi yang sudah
                                    ditetapkan. <br>
                                    Menjalin kerjasama yang harmonis & profesional dengan seluruh pihak yang
                                    bersangkutan.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-clipboard2-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Klasifikasi Produk</a></h4>
                                <p>Durable, Eco Friendly, Long Lasting, Easy Mixing</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-box-seam flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Product</a></h4>
                                <p>PG-70 & PG-76</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Products</h2>
                    <p>
                        Produk yang dikelola Ecoasphalt adalah Produk Aspal asli Buton yang terkenal akan kermurnian
                        tingkat Extraksi nya.
                    </p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url({{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/C8999PA.JPG);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Aspal Buton Murni</h4>
                                        <p>
                                            Aspal buton mempunyai batuan yang berasal dari campuran antara bitumen
                                            dengan mineral lain.
                                            Produksi aspal buton dilakukan dalam berbagai bentuk pengolahan dan
                                            diperoleh dengan mengekstraksi
                                            agar resin dan fraksi ringan yang terkandung dapat diolah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url({{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/DJI_0291.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Dikelola dalam berbagai Proses</h4>
                                        <p>
                                            Ecoasphalt mengelola Aspal Buton Murni melalui Beberapa Proses, sehingga
                                            aspal yang dihasilkan lebih dapat diekstraksi dan berkualitas baik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url({{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/C9829T01.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Uji Laboraturium</h4>
                                        <p>
                                            aspal sebelum didistribusikan akan di uji pada laboraturium yang sudah
                                            tersertifikasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url({{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/DSC00439.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Ramah Lingkungan</h4>
                                        <p>
                                            Proses Pengelolaan yang bersih, semua hasil filtrasi yang dikelola akan
                                            diproses dan
                                            dibuang dalam kondisi bersih tanpa mencemari lingkungan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Keunggulan Produk</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>

                <div class="row d-flex justify-content-center mt-0 pt-0">

                    <div class="col-sm-12 col-md-12 mx-auto d-flex justify-content-center">
                        <h5>
                            Pengujian PG-70
                        </h5>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center mb-2">
                        <img class="img mx-auto d-flex justify-content-center"
                            src="{{ asset('assets/bahan') }}/PT.%20Kartika%20Prima%20Abadi/pangko1.PNG"
                            alt="" width="500px" style="width: 750px;">
                    </div>

                    <div class="col-sm-12 col-md-12 mx-auto d-flex justify-content-center mt-2">
                        <h5>
                            Pengujian PG-76
                        </h5>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-flex justify-content-center">
                        <img class="img mx-auto d-flex justify-content-center"
                            src="{{ asset('assets/bahan') }}/PT.%20Kartika%20Prima%20Abadi/pangko2.PNG"
                            alt="" width="500px" style="width: 750px;">
                    </div>

                </div>

                {{-- <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-mountain-city"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                hic non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                voluptas adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                sit provident adipisci neque.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div> --}}

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Aspal Alam</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Stockpile</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Proses</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Uji Lab</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="{{ asset('assets/themes/assets') }}/img/features-1.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/themes/assets') }}/img/features-2.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatibus commodi accusamu</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/themes/assets') }}/img/features-3.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/themes/assets') }}/img/features-4.jpg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Customers</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
                        architecto accusamus fugit aut qui distinctio</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-remodeling">PT. Kartika Prima Abadi</li>
                        <li data-filter=".filter-construction">PT. Konawe Multi Usaha</li>
                        <li data-filter=".filter-repairs">PT. Pyramida Raya Persada</li>
                        <li data-filter=".filter-design">PT. Serayu Putra Persada</li>
                        <li data-filter=".filter-proyek">Proyek Preservasi</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        @php
                            $array_kpa = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                        @endphp
                        @foreach ($array_kpa as $i)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('assets') }}/bahan/PT.%20Kartika%20Prima%20Abadi/{{ $i }}.jpg"
                                        class="img-fluid img-cek" alt="">
                                    <div class="portfolio-info">
                                        <h4>PT. Kartika Prima Abadi {{ $i }}</h4>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('assets') }}/bahan/PT.%20Konawe%20Multi%20Usaha/{{ $i }}.jpg"
                                        class="img-fluid img-cek" alt="">
                                    <div class="portfolio-info">
                                        <h4>PT. Konawe Multi Usaha {{ $i }}</h4>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('assets') }}/bahan/PT.%20Pyramida%20Raya%20Persada/{{ $i }}.jpg"
                                        class="img-fluid img-cek" alt="">
                                    <div class="portfolio-info">
                                        <h4>PT. Pyramida Raya Persada {{ $i }}</h4>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('assets') }}/bahan/PT.%20Serayu%20Putra%20Persada/{{ $i }}.jpeg"
                                        class="img-fluid img-cek" alt="">
                                    <div class="portfolio-info">
                                        <h4>PT. Serayu Putra Persada {{ $i }}</h4>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-proyek">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('assets') }}/bahan/Proyek%20Preservasi%20Jalan%20Dalam%20Kota/{{ $i }}.jpeg"
                                        class="img-fluid img-cek" alt="">
                                    <div class="portfolio-info">
                                        <h4>Proyek Preservasi {{ $i }}</h4>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @endforeach

                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Our Projects Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up"">



                <div class=" section-header">
                    <h2>Recent Blog Posts</h2>
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/themes/assets') }}/img/blog/blog-1.jpg" class="img-fluid"
                                    alt="">
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/themes/assets') }}/img/blog/blog-2.jpg" class="img-fluid"
                                    alt="">
                                <span class="post-date">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/themes/assets') }}/img/blog/blog-3.jpg" class="img-fluid"
                                    alt="">
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="section-header mt-4">
                <h2>Kontak Kami</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Alamat</h3>
                            <p>
                                <b>Head Office : </b><br />
                                Soho Capital Lt.39 Unit 06, Jl.Let.Jend S.Parman KV 28, Grogol Petamburan, Jakarta Barat
                            </p>
                            <p>
                                <b>Site Office : </b><br />
                                Jl. Poros Kamaru, Desa Suandala, Dusun Adikila, Kecamatan Lasalimu, Kabupaten Buton
                            </p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>kpa@ecoasphalt.id</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Telepon</h3>
                            <p>021-30003615</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">

                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4178831024765!2d122.97452727606218!3d-5.196819852406757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3e5a6e74ee55d%3A0x96e3105e21d3b112!2sPT%20Kartika%20Prima%20Abadi!5e0!3m2!1sen!2sid!4v1700632817902!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        {{--
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>UpConstruction</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                </div>
            </div>
        </div> --}}

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> forged by IT Division of
                    EcoAsphalt
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/themes/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets/themes/assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/themes/assets') }}/js/main.js"></script>

</body>

</html>
