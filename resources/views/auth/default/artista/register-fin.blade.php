@extends('template.default.layout.default')
@section('content')
<body class="index-page" style="background-color: #e0e1e3">
  <nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../inicio" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
          <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                <img src="{{ asset('assets/img/brand/logoa.png')}}" width="60%">
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Siguenos en Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Me Gusta en Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Siguenos en Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Siguenos en Youtube" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-youtube"></i>
              <p class="d-lg-none d-xl-none">Youtube</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- Header -->
    <div class="wrapper section-signup m-0 p-0" style="background-image: url('{{asset('assets/img/bg/register-fin-artista.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header container">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square7"></div>
      <div class="container">
      </div>
    </div>
  </div>
  <!-- End Header -->
</body>
@include('template.default.footer.webfoot')
@endsection