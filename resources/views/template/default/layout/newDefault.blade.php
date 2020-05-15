<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        CONECTE | Tu artista mas cerca de ti
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/blk-design-system-pro.min.css?v=1.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="contact-page">
    <!-- Navbar -->
    @yield('navbar')
    <!-- End Navbar -->
    <div class="wrapper pb-0 mb-0">
        <div class="page-header header-filter contactus-3 bg-primary" style="height: 200px; min-height: 200px; margin-bottom: 0px; background-image: linear-gradient(to right, #343abe, #c10e56, #c92b2b);">
            <div class="page-header-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">

                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    @yield('sidebarL')
                    @yield('middle')
                    @yield('sidebarR')
                </div>
            </div>
        </div>
    </div>

    @yield('modals')
</body>

<!-- Footer2 -->
<footer class="footer m-0 p-0" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container mx-auto m-4">
        <h6 class="lead text-muted">Desarrollado por <strong>BRP Abogados S.A.S.</strong> Todos los derechos reservados</h6>
    </div>
</footer>
<!-- End Footer -->

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<script src="{{ asset('assets/js/components/charts/chart-bars.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
<script src="{{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>
<script>
    $('body').on('click', '.btnVerResppuesta', function(e) {
        console.log('hola')
        e.preventDefault()
        let id = $(this).attr('id')
        var video = document.getElementById('videoPlayer');
        $.ajax({
            type: "get",
            url: "/ver-respuesta/" + id,
            data: {},
            dataType: "json",
            success: function(response) {
                console.log(response)
                $('#video').attr('src', response.data.dedicatoria.URL_DE_RESPUESTA)
                $('.videoLink').text(response.data.dedicatoria.URL_DE_RESPUESTA)
                video.load()
                $('#videoModal').modal()
            }
        });
    })
</script>
</body>