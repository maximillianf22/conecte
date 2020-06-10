@extends('template.default.layout.default')
@section('content')

<body class="index-page" style="background-color: #e0e1e3">
  <nav class="navbar navbar-expand-lg navbar-transparent fixed-top">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="inicio" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
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
                <i class="fas fa-window-close"></i>
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
  <div class="wrapper section-signup m-0 p-0" style="background-image: url('{{asset('assets/img/bg/login.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header container">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="row">
          <div class="content-center text-left col-md-5 offset-md-3">
            <div class="card card-contact card-raised p-3" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
              <div class="card-header text-center">
                <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%" class="d-none d-lg-block mx-auto">
                <h4 class="card-title text-white display-4"> Inicia sesion para disfrutar de <strong>Todo lo bueno</strong> que traemos para ti...</h4>
              </div>
              <div class="card-body pb-0">
                <form role="form" method="POST" action="{{route('loginPostAdmin')}}">
                  {{ csrf_field() }}
                  <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Correo" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  @if(session('message_error'))
                  <p class="text-danger">{{session('message_error')}}</p>
                  @endif
                  <div class="card-footer text-center">
                    <div class="col-xs-12" style="padding-bottom: 15px;">
                      <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Iniciar sesión</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center mt-0">
                <div class="pull-left ml-3 mt-2 mb-3">
                  <h6>
                    <a class="link footer-link" href="#" data-toggle="modal" data-target="#myModal1">Registrar</a>
                  </h6>
                </div>
                <div class="pull-right mr-3 mt-2 mb-3">
                  <h6>
                    <a href="{{ url('/password/reset') }}" class="link footer-link">¿olvido su clave?</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade modal-mini modal-primary modal-mini" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-window-close text-white"></i>
          </button>
          <div class="modal-profile">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="modal-body">
          <p>Seleccione el tipo de Usuario</p>
        </div>
        <div class="modal-footer">
          <a href="persona/register">
            <button type="button" class="btn  btn-neutral">
              <strong class="text-dark">Persona</strong>
            </button>
          </a>
          <a href="artista/register">
            <button type="button" class="btn  btn-neutral">
              <strong class="text-dark">Artista</strong>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->
</body>
@include('template.default.footer.webfoot')
@endsection

@section('js')

@endsection