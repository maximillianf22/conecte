<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
  <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/blk-design-system-pro.min.css?v=1.0.0')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <style>
    .imgLogo{
      padding: 25px;
    }

    .card{
      margin: 0 0 20px 0;
    }

    .iconError{
      font-size: 40px;
    }

    .success{
      color: #28a745;
    }

    .warning{
      color: #ffc107;
    }

    .danger{
      color: #dc3545;
    }
  </style>
  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body>
  <div class="contact-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="{{ asset('assets/img/brand/logoc.png')}}" class="imgLogo" width="70%">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-center iconError {{$response->color}}">
                  <i class="{{$response->icon}}"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center textError">
                  <h4 class="card-title font-weight-bold">{{$response->name}}</h4>
                  <h4 class="card-text">{{$response->message}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer2 -->
  {{-- <footer class="footer m-0 p-0" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container mx-auto m-4">
      <h6 class="lead text-muted">Desarrollado por <strong>BRP Abogados S.A.S.</strong> Todos los derechos reservados</h6>
    </div>
  </footer> --}}
  <!-- End Footer -->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <script src="{{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>

</body>
