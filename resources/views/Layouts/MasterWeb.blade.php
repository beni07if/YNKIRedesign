<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layouts.HeadStyle')
</head>

<body>

    @include('Layouts.Header')

    @yield('slideShow')

    <!-- #main -->
    <div class="main">

        @yield('MainContent')

    </div>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        @include('Layouts.Footer')
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>