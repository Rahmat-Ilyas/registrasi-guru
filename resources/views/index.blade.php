<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guru Andalan Sulawesi Selatan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
</head>

<body id="home">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book-open fa-lg me-2"></i>GuruAndalan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#home" class="nav-item nav-link active" id="nav-home">Home</a>
                <a href="#informasi" class="nav-item nav-link" id="nav-informasi">Informasi</a>
                <a href="#jadwal" class="nav-item nav-link" id="nav-jadwal">Jadwal</a>
                <a href="#caraDaftar" class="nav-item nav-link" id="nav-caraDaftar">Cara Pendaftaran</a>
                <a href="#kontak" class="nav-item nav-link" id="nav-kontak">Kontak</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Daftar Sekarang<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/home-1.jpg') }}" alt="" style="height: 800px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pendaftaran Guru
                                    Smartschool
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Daftarkan Diri Anda Sekarang
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Mari berkontribusi dalam membangun
                                    dan memajukan pendidikan di Sulawesi Selatan. Daftarkan diri anda di program
                                    prioritas Smartschool</p>
                                <a href="#informasi"
                                    class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Daftar
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/home-2.jpg') }}" alt="" style="height: 800px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Pendaftaran Guru
                                    Smartschool
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Mari berkontribusi dalam membangun
                                    dan memajukan pendidikan di Sulawesi Selatan. Daftarkan diri anda di program
                                    prioritas Smartschool</p>
                                <a href="#informasi"
                                    class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Daftar
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-money-bill-alt text-primary mb-4"></i>
                            <h5 class="mb-3">Gaji Bulanan</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Kelas Online</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Mengajar Dari Rumah</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Modul & Bahan Mengajar</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="informasi">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/tentang.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Informasi</h6>
                    <h1 class="mb-4">Program Prioritas Smart School</h1>
                    <p class="mb-4">Salah satu permaslahan pendidikan di Sulawasi Selatan adalah tidak
                        meratanya kulaitas pendidikan di suatu daerah dengan daerah lainnya. Hal ini disebabkan oleh
                        tidak meratanya sebaran guru disetiap daerah, hak setiap siswa mendapatkan pendidikan yang baik
                        dari guru yang berkualitas</p>
                    <p class="mb-4">Untuk mengatasi permasalahan tersebut pemerintah provinsi Sulawesi Selatan
                        mengadakan program prioritas, yaitu <b>Smart School</b>. Untuk itu kami mengundang guru PNS
                        tingkat SMA se Sulawesi Selatan untuk mengikuti seleksi guru Smart School</p>
                    <h4 class="mb-2 text-center">Syarat Pendaftaran</h4>
                    <div class="row gy-2 gx-4 mb-2">
                        <div class="col-sm-12">
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Merupakan Guru
                                PNS</p>
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Berdomisisli di
                                Sulawesi Selatan</p>
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Mengirimkan CV.
                                sertifikat pendukung</p>
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Mengirimkan
                                Portofolio</p>
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Video materi
                                pembelajaran minimal durasi 5 menit</p>
                            <p class="mb-2"><i class="fa fa-arrow-right text-primary me-2"></i>Video contoh
                                soal dan pembahasan minimal durasi 5 menit</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow fadeInUp mt-5" data-wow-delay="0.4s">
                        <h4 class="mb-2 text-center">Jumlah Guru yang Diterima</h4>
                        <div class="table-responsive shadow">
                            <table class="table table-bordered mb-0">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Jumlah Diterima</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Pendidikan Agama & Budi Pekerti</td>
                                        <td>2 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                        <td>2 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Bahasa Indonesia</td>
                                        <td>8 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Sejarah Indonesia</td>
                                        <td>8 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Bahasa Inggris</td>
                                        <td>8 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Seni Budaya</td>
                                        <td>2 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td>Penddikan Jasmani Olahraga & Kesehatan</td>
                                        <td>2 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>8</th>
                                        <td>Biologi</td>
                                        <td>7 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>9</th>
                                        <td>Fisika</td>
                                        <td>7 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>10</th>
                                        <td>Kimia</td>
                                        <td>7 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>11</th>
                                        <td>Geografi</td>
                                        <td>5 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>12</th>
                                        <td>Sosiologi</td>
                                        <td>5 Guru</td>
                                    </tr>
                                    <tr>
                                        <th>13</th>
                                        <td>Ekonomi</td>
                                        <td>5 Guru</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category timeline" id="jadwal">
        <div class="container pt-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Jadwal</h6>
                <h1 class="mb-5">Jadwal & Timeline Pendaftaran</h1>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="timeline-centered timeline-sm">
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>11 - 20 Jan</span><span>2022</span></time>
                                <div class="timeline-icon bg-orange"><i class="fa fa-exclamation"></i></div>
                                <div class="timeline-label bg-orange">
                                    <p class="timeline-title">Sosialisasi Kegiatan</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry left-aligned">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>13 - 26 Jan</span><span>2022</span></time>
                                <div class="timeline-icon bg-pink"><i class="fa fa-file-alt"></i></div>
                                <div class="timeline-label bg-pink">
                                    <p class="timeline-title">Mengupload portofolio peserta, video pembelajaran dan
                                        pembahasan</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>14 - 29 Jan</span><span>2022</span></time>
                                <div class="timeline-icon bg-yellow"><i class="fa fa-check"></i></div>
                                <div class="timeline-label bg-yellow">
                                    <p class="timeline-title text-white">Pemeriksaan Portofolio dan Video Peserta</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry left-aligned">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>31 Jan</span><span>2022</span></time>
                                <div class="timeline-icon bg-blue"><i class="fa fa-info"></i></div>
                                <div class="timeline-label bg-blue">
                                    <p class="timeline-title text-white">Pengumuman hasil pemeriksaan portofolio dan
                                        video</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>02 - 05 Feb</span><span>2022</span></time>
                                <div class="timeline-icon bg-violet"><i class="fa fa-file-signature"></i></div>
                                <div class="timeline-label bg-violet">
                                    <p class="timeline-title text-white">Tes Microteaching</p>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-entry left-aligned">
                            <div class="timeline-entry-inner">
                                <time class="timeline-time"><span>07 Feb</span><span>2022</span></time>
                                <div class="timeline-icon bg-green"><i class="fa fa-bullhorn"></i></div>
                                <div class="timeline-label bg-green">
                                    <p class="timeline-title text-white">Pengumuman Akhir</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5" id="caraDaftar">
        <div class="container pt-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Cara Pendaftaran</h6>
                <h1 class="mb-5">Petunjuk Cara Pendaftaran</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/course-1.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/course-2.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/course-3.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5" id="kontak">
        <div class="container pt-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kontak</h6>
                <h1 class="mb-5">Hubungi Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/course-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            var informasi = $('#informasi').offset().top;
            var jadwal = $('#jadwal').offset().top;
            var caraDaftar = $('#caraDaftar').offset().top;
            var kontak = $('#kontak').offset().top;

            $('.nav-link').click(function(e) {
                e.preventDefault();

                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                var attr = $(this).attr('href');
                var scroll = $(attr).offset().top;
                $("html, body").animate({
                    scrollTop: scroll
                }, 300, 'swing');
            });

            $(document).scroll(function() {
                var st = $(this).scrollTop() + 50;

                $('.nav-link').removeClass('active');
                if (st < informasi) $('#nav-home').addClass('active');
                else if (st > informasi && st < jadwal) $('#nav-informasi').addClass('active');
                else if (st > jadwal && st < caraDaftar) $('#nav-jadwal').addClass('active');
                else if (st > caraDaftar && st < kontak) $('#nav-caraDaftar').addClass('active');
                else if (st > kontak) $('#nav-kontak').addClass('active');
            });
        });
    </script>
</body>

</html>
