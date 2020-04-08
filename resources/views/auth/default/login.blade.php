@extends('template.default.layout.default')
@section('content')
<body class="index-page" style="background-color: #e0e1e3">
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
          <form class="form" method="" action="">
            <div class="card-header text-center">
              <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%" class="d-none d-lg-block mx-auto">
              <h4 class="card-title text-white display-4"> Inicia sesion para disfrutar de <strong>Todo lo bueno</strong> que traemos para ti...</h4>
            </div>
            <div class="card-body">
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Correo">
              </div>
              <div class="input-group input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Contraseña">
              </div>
            </div>
            <div class="card-footer text-center">
              <a href="user/home" class="btn btn-primary btn-round btn-lg btn-block">Iniciar sesión</a>
            </div>
            <div class="pull-left ml-3 mt-2 mb-3">
              <h6>
                <a class="link footer-link"  href="#" data-toggle="modal" data-target="#myModal1">Registrar</a>
              </h6>
            </div>
            <div class="pull-right mr-3 mt-2 mb-3">
              <h6>
                <a href="#" class="link footer-link">¿olvido su clave?</a>
              </h6>
            </div>
          </form>
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
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="modal-profile">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <div class="modal-body">
              <p>Seleccione el tipo de Usuario</p>
            </div>
            <div class="modal-footer">
                <a  href="persona/register">
                  <button type="button" class="btn  btn-neutral">
                    <strong class="text-dark">Persona</strong>
                  </button>
                </a>
                <a  href="artista/register">
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