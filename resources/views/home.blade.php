@extends('template.default.layout.default')

@section('content')

<body class="index-page" style="background-color: #e0e1e3">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom" target="_blank">
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
          <li class="nav-item">
            <a class="nav-link btn btn-neutral btn-round btn-simple" href="login">
              <i class="fas fa-user"></i> Iniciar Sesión
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Home -->
  <!-- Header -->
    <div class="wrapper m-0 p-0" style="background-image: url('{{asset('assets/img/bg/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="row">
            <div class="content-center text-left col-md-5 mt-5 offset-md-2">
              <h1 class="h1-seo p-0 m-0 text-white display-2"><strong>Tu artista favorito <br>a solo un click</strong></h1>
              <h3 class="m-0 mb-4 p-0  text-white"><small></small><strong>Conecta</strong> con tu persona favorita</h3>
              <a href="persona/register" class="btn btn-facebook btn-round pl-5 pr-5 active">
                <h3 class="p-0 m-0 text-white"><i class="fas fa-user"></i> Registro como <strong>Persona</strong></h3></a><br>
              <a href="artista/register" class="btn btn-primary btn-border btn-round pl-5 pr-5 active">
                <h3 class="p-0 m-0 text-white"><i class="fas fa-music"></i> Registro como <strong>Artista&nbsp;&nbsp;&nbsp;</strong></h3></a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <!-- Main -->
  <!-- Seccion encuentra -->
  <div class="container-fluid p-0 m-0" style="background-image: url('{{asset('assets/img/bg/inicio1.jpg')}}');background-size: cover;  background-repeat:   no-repeat;  background-position: center center;">
    <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="p-4 col-lg-12">
            <h1 class="text-center text-dark display-2"> Encuentra <br>
              los <strong>beneficios</strong> que tenemos <br>
              para ti.</h1>
            <div class="row row-grid justify-content-center  mt-5">
              <div class="col-lg-4 card card-pricing card-plain card-primary" >
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="fas fa-music text-primary"></i>
                  </div>
                  <h4 class="info-title text-dark h3">Artistas</h4>
                  <hr class="line-primary">
                  <p class="text-dark h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
              </div>
              <div class="col-lg-6  offset-md-1 rounded bnt btn-round btn-primary mb-4 mt-5" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
                <h1 class="text-left  display-4 offset-md-4 mt-4 mb-0"> <i class="fas fa-user text-primary"></i> Personas </h1><hr class="line-primary offset-md-4 mt-2 mb-0">
                <div class="info info-horizontal m-0 p-0" style="padding-top: 4%!important;">
                <div class="icon text-primary">
                  <i class="fas fa-building"></i>
                </div>
                <div class="description mt-0">
                  <h3 class="info-title ">Empresas</h3>
                  <p class="description text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
              </div>
              <div class="info info-horizontal p-0 m-0 mb-4">
                <div class="icon text-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="description">
                  <h3 class="info-title ">Individuos</h3>
                  <p class="description text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Seccion encuentra -->
  <!-- Seccion informacion -->
  <div class="testimonials-2 p-0">
    <div class="container-fluid m-0 p-0">
        <div class="container-fluid p-0">
          <div class="row mx-auto m-0 p-0">
            <div class="col-md-6 p-5"  style="background-image: url('{{asset('assets/img/bg/gradient.jpg')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
              <h3 class="card-title display-2 text-white"> ¿Que es Conecte? </h3>
          <h3 class="text-default p-0 text-white">• • •</h3>
          <h4 class="description text-white">
            Es una plataforma digital que te permitirá estar más cercade tus artistas y/o celebridades favoritas, desde agrupaciones, cantantes hasta personajes influyentes; de esta manera podrás enviar emociones a través de ellos
          </h4>
        </div>
            <div class="col-md-6 p-0 d-flex flex-row-reverse" >
          <img class="d-block img-fluid rounded-0 content-right" src="assets/img/bg/inicio2.jpg">
          </div>
        </div>
    </div>
  </div>

  <div class="testimonials-2 p-0">
    <div class="container mt-5 pt-5 pb-5">
        <div class="container-fluid">
          <div class="row mx-auto m-0 p-0">
            <div class="col-md-7 p-0 d-flex flex-row-reverse" >
              <img class="d-block img-fluid rounded-0" src="assets/img/bg/inicio3.jpg">
            </div>
            <div class="col-md-5 p-5"  style="background-image: url('{{asset('assets/img/bg/rose.jpg')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
              <h3 class="text-white lead text-white p-0 m-0">Artista</h3><hr class="line-info p-0 m-0">
              <h3 class="card-title display-4 text-white"> Gernera riquezas y cumple tus sueños sociales</h3>
              <h4 class="description text-white">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </h4>
            </div>
          </div>
        </div>
    </div>
  </div>


 <div class="container-fluid p-0 m-0">
      <div class="testimonials-1">
        <div class="container card border p-5" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
            <div class="container">
              <div class="row mx-auto m-0 p-0">
                <div class="col-md-7 p-0 d-flex flex-row-reverse" >
                  <img class="d-block img-fluid rounded-0" src="assets/img/bg/inicio5.jpg">
                </div>
                <div class="col-md-5 p-5"  style="background-image: url('{{asset('assets/img/bg/blue.png')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
                  <h3 class="text-white lead text-white p-0 m-0">Empresa</h3><hr class="line-danger p-0 m-0">
                  <h3 class="card-title display-4 text-white"> Cambia la forma de invitar a tus Eventos</h3>
                  <h4 class="description text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                  </h4>
                </div>
              </div>
              <div class="row mx-auto m-0 p-0">
                <div class="col-md-7 p-0 d-flex flex-row-reverse" >
                  <img class="d-block img-fluid rounded-0" src="assets/img/bg/inicio4.jpg">
                </div>
                <div class="col-md-5 p-5"  style="background-image: url('{{asset('assets/img/bg/blue.png')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
                  <h3 class="text-white lead text-white p-0 m-0">Individuo</h3><hr class="line-danger p-0 m-0">
                  <h3 class="card-title display-4 text-white">Sorprende a las personas que te importan</h3>
                  <h4 class="description text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                  </h4>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>

  <div class="section section-signup" style="background-image: url('{{asset('assets/img/bg/blue.png')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="container">
      <div class="squares square-1"></div>
      <div class="squares square-2"></div>
      <div class="row row-grid justify-content-between align-items-center">
          <div class="container">
            <h1 class="text-center text-white display-2">¿Como Funciona?</h1>
            <div class="container p-5">
                  <img class="d-block img-fluid rounded-0 mx-auto" width="90%" src="assets/img/bg/inicio6.png">
            </div>
            <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="info info-horizontal m-0 p-0">
                <div class="icon text-info">
                  <img class="d-block" width="100%" src="assets/img/bg/one.png">
                </div>
                <div class="description">
                  <h4 class="info-title display-4"><strong>Selecciona</strong><br> tu artista</h4>
                  <p class="description text-white lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info info-horizontal m-0 p-0">
                <div class="icon text-info">
                  <img class="d-block" width="100%" src="assets/img/bg/two.png">
                </div>
                <div class="description">
                  <h4 class="info-title display-4"><strong>Escribe</strong><br> tu dedicatoria</h4>
                  <p class="description text-white lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info info-horizontal m-0 p-0">
                <div class="icon text-info">
                  <img class="d-block" width="100%" src="assets/img/bg/three.png">
                  <img src="">
                </div>
                <div class="description">
                  <h4 class="info-title display-4"><strong>Envia</strong><br> tu artista</h4>
                  <p class="description text-white lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          </div>
    </div>
    </div>
  </div>

  <!-- End Informacion -->
  <!-- End Main -->
  <div class="container-fluid card mx-auto p-0 m-0 d-none d-sm-none d-md-block">
    <img src="{{asset('assets/img/bg/antfoot.jpg')}}" class="img-fluid">
 </div>
  @include('template.default.footer.webfoot')
  </body>

@endsection