<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VacationPal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user_template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user_template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user_template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user_template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    @include('layouts_user.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small class=" link-light"><i class="fa fa-map-marker-alt text-secondary me-2"></i>Pantai 3 Warna
                    Malang</small>
                <small class="ms-4 dark link-light"><i class="fa fa-clock text-secondary me-2"></i>07.00 - 16.00</small>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="#" onclick="location.reload()" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">VacationPal</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#" onclick="location.reload()" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @yield('carousel')
    <!-- Carousel End -->


    <!-- About Start -->
    @yield('about')
    <!-- About End -->

    <!-- Features Start -->
    @yield('features')
    <!-- Features End -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- Callback Start -->

    <!-- Callback End -->


    <!-- Projects Start -->

    <!-- Projects End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Copyright Start -->

    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user_template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user_template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user_template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user_template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_template/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user_template/js/main.js') }}"></script>
</body>

</html>
