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
    @include('layouts_user.navbar_user')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    @yield('carousel')
    <!-- Carousel End -->

    <!-- About Start -->
    @yield('about')
    <!-- About End -->

    <!-- Deskripsi Start -->
    @yield('deskripsi')
    <!-- Deskripsi End -->

    <!-- Features Start -->
    @yield('fitur')
    <!-- Features End -->

    <!-- Footer Start -->
    @include('layouts_user.footer_user')
    <!-- Footer End -->


    <!-- Copyright Start -->
    @include('layouts_user.copyright')
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
