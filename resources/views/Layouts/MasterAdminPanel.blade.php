<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layouts.HeadStyleAdminPanel')
</head>

<body>

    @include('Layouts.HeaderAdminPanel')

    @include('Layouts.SidebarAdminPanel')

    <!-- Estart #main  -->
    @yield('MainContent')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assetAdmin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/chart.js')}}/chart.min.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assetAdmin/vendor/echarts/echarts.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assetAdmin/js/main.js')}}"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.8/dist/sweetalert2.min.js"></script>

</body>

</html>