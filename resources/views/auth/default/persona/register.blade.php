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
          <li class="nav-item">
            <a href="../artista/register" class="nav-link btn btn-neutral btn-round btn-simple">
              <i class="fas fa-music"></i> Cambiar a Artista
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <div class="wrapper section-signup m-0 p-0" style="background-image: url('{{asset('assets/img/bg/register-persona.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
    <div class="page-header container">
      <div class="squares square-1"></div>
      <div class="squares square-2"></div>
      <div class="squares square-3"></div>
      <div class="squares square-4"></div>
      <div class="squares square5"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="row">
          <div class="content-center text-left col-md-6 mt-3 offset-md-3">
            <div class="card card-contact card-raised" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
              <!-- <a href="register/fin"> -->
              <form role="form" id="contact-form" method="post" action="{{ url('/registroUsuariosPost') }}" autocomplete="off">
                {{ csrf_field() }}
                <div class="card-header text-center">
                  <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%" class="d-none d-lg-block mx-auto">
                  <h4 class="card-title text-white display-3"> Registro como <strong>Persona</strong></h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-name"></i></span>
                          </div>
                          <input class="form-control" name="name" placeholder="Nombres y apellidos" aria-label="Nombre" type="text" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control" name="cedula" id="cedula" placeholder="C.C/Nit/Pasaporte/CC ext " aria-label="C.C/Nit/Pasaporte/CC ext" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control" name="email" placeholder="Email" aria-label="Email" type="email" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 pl-2">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-collection"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Telefono" name="celular_usuario" aria-label="Telefono" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control" placeholder="Contraseña" name="password" aria-label="Contraseña" type="password" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 pl-2">
                      <div class="form-group">
                        <select class="form-control" data-trigger name="medio" id="medio">
                          <option disabled selected>¿Como escuche a Conecte?</option>
                          <option value="Redes Sociales" class="text-dark">Redes Sociales</option>
                          <option value="Tv o Radio" class="text-dark">Tv o Radio</option>
                          <option value="Amigo o Artista" class="text-dark">Amigo o Artista</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8 offset-2">
                      <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="customCheck" name="terminos_y_condiciones" type="checkbox">
                        <label class="custom-control-label" for="customCheck">
                          <a href="{{ url('/assets/img/legal/TYC-USUARIOS.pdf') }}" target="new"><span><small>he leido y <strong>Acepto los terminos y condiciones</strong></small></span></a>
                        </label>
                      </div>
                      <button type="submit" href="register/fin" class="btn btn-success btn-lg pull-right btn-block">Siguiente</button>
                    </div>
                  </div>
                  @if (count($errors) > 0)
                  <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                  </div>
                  @endif
                </div>
              </form>
              <!-- </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->
</body>
@include('template.default.footer.webfoot')
@endsection