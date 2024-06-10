<?php 
  include 'koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo"$k_k[nama_app]";?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="tema/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="tema/lib/animate/animate.min.css" rel="stylesheet">
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="tema/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i><?php echo"$k_k[alamat]";?></small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Senin-Jumat 08am-3pm, sabtu-minggu Tutup<</small>
                </div>
         
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span><?php echo"$k_k[tahun]";?></span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0"><?php echo"$k_k[nama_app]";?></span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span><?php echo"$k_k[alias]";?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0"><?php echo"$k_k[nama_app]";?></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="index.php#tentang" class="nav-item nav-link">Tentang</a>
                        <a href="index.php#team" class="nav-item nav-link">Ketua Osis</a>
                        <!-- <a href="index.php#login" class="nav-item nav-link">login</a> -->
                        <a href="index.php#hubungi" class="nav-item nav-link">login</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="tema/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Demokrasi Dimulai dari Sekolah, Setiap Suara Berharga</h1>
                                    <p class="mb-5 animated slideInRight">Website Pemilihan Ketua Osis <?php echo"$k_k[nama]";?></p>
                                    <a href="index.php#tentang" class="btn btn-primary py-3 px-5 animated slideInRight">Tentang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="tema/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Dari Sekolah untuk Demokrasi, dari Demokrasi untuk Bangsa</h1>
                                    <p class="mb-5 animated slideInLeft">Website Pemilihan Ketua Osis <?php echo"$k_k[nama]";?></p>
                                    <a href="index.php#tentang" class="btn btn-primary py-3 px-5 animated slideInLeft">Tentang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div id="tentang" class="container-fluid py-5">
        <div class="container">
        <div class="row g-5 align-items-center mb-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="tema/img/about-1.jpg" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3"><?php echo"$k_k[nama]";?></h1>
                   
                    <p class="mb-5"><?php echo"$k_k[alamat]";?></p>
              
                    <p class="mb-4"><?php echo"$k_k[isi]";?></p>
                   <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                
            </div>
        </div>
    </div>
    <!-- About End -->
<!-- Team Start -->
<div id="team" class="container-fluid container-team py-5">
<div class="container pb-5">
            
            <div class="row g-4">
            <?php
$tebaru=mysqli_query($koneksi," SELECT * FROM paslon WHERE status='aktif' ORDER BY id_paslon DESC ");
while ($t=mysqli_fetch_array($tebaru)){ ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="foto/paslon/<?=$t["foto"]?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1"><?=$t["nama_paslon"]?></h5>
                            <span>Calon Ketua Osis </span>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-12 text-center">
                            <a href="index.php#hubungi" class="btn btn-primary w-100 py-3" >Pilih Kami</a>
                        </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Appoinment Start -->
    <div id="hubungi" class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Dari Sekolah untuk Demokrasi, dari Demokrasi untuk Bangsa</h1>
                    <p>Kita Mulai dari Sekolahan Untuk membangun suatu demokrasi, jika buka kita siapa lagi yang akan mau</p>
                    <p class="mb-4">Sekolah bukan tentang belajara materi saja, kita butuh demokrasi jika ingin menjadi bangsa maju</p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Alamat</h5>
                            <span><?php echo"$k_k[alamat]"; ?></span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Buku Sekolahan</h5>
                            <span>Senin-Jumat 08am-5pm, sabtu-mingu Tutup</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Login Pemilih</h2>
                    <form action="loginosis.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name='nisn' placeholder="Your Name" required>
                                <label for="name">NISN</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="pass" placeholder="Password" required>
                                <label for="mail">Password</label>
                            </div>
                        </div>
                        
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->


    



    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="tema/lib/wow/wow.min.js"></script>
    <script src="tema/lib/easing/easing.min.js"></script>
    <script src="tema/lib/waypoints/waypoints.min.js"></script>
    <script src="tema/lib/counterup/counterup.min.js"></script>
    <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="tema/js/main.js"></script>
</body>

</html>
