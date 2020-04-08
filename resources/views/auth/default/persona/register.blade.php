@extends('template.default.layout.default')
@section('content')
<body class="index-page" style="background-color: #e0e1e3">
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
                <a href="register/fin">
                <form role="form" id="contact-form" method="post">
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
                            <input class="form-control" placeholder="Nombre" aria-label="Nombre" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
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
                            <input class="form-control" placeholder="Email" aria-label="Email" type="email">
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-2">
                        <div class="form-group">
                        <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                          <option disabled selected>¿Como escuche a Conecte?</option>
                          <option value="2" class="text-dark">Redes Sociales</option>
                          <option value="3" class="text-dark">Tv o Radio</option>
                          <option value="3" class="text-dark">Amigo o Artista</option>
                        </select>
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
                            <input class="form-control" placeholder="C.C/Nit/Pasaporte/CC ext " aria-label="C.C/Nit/Pasaporte/CC ext" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono">
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
                            <input class="form-control" placeholder="Contraseña" aria-label="Contraseña" type="password">
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-2">
                        <div class="form-group">
                        <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                          <option disabled selected>¿Especifica el Medio?</option>
                          <option value="2" class="text-dark">Facebook</option>
                          <option value="3" class="text-dark">Twitter</option>
                          <option value="3" class="text-dark">Instagram</option>
                          <option value="3" class="text-dark">Youtube</option>
                        </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                       <div class="col-6">
                      <div class="form-group">
                        <div class="input-group input-group-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="CODIGO" data-toggle="tooltip" data-placement="left" title="
                        En conecte
                        ganamos TODOS 
                        Ingresa el codigo de la persona
                        que te refirió, si no lo tienes ponte
                        en contacto con el/ella para
                        que reciba su comisión, tu
                        tambien puedes ganar!">
                        </div>
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="customCheck" type="checkbox">
                          <label class="custom-control-label" for="customCheck">
                            <span><small>he leido y <strong>Acepto los terminos y condiciones</strong></small></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 offset-2">
                       <a href="fin">
                        <button type="submit" class="btn btn-success btn-lg pull-right">Siguiente</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </form>
                </a>
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