@extends('template.default.layout.default')

  <!-- Estilo borde de las imagenes -->
  <!-- Estilo borde de las imagenes -->
<style type="text/css">
  .img-thumbnail {
    background-color: #D13F3F !important;
    background-image: linear-gradient(to right top, #ff6f00, #ff562e, #ff3d49, #ff2263, #f9097b, #ef008b, #e2009c, #d000ac, #be00bc, #a400ce, #7b00e1, #0909f6);
    border: .0rem solid !important;
    padding: .20rem !important;
  }
    .form-control {

    background-color: white !important;
}

.table-condensed>tbody>tr>td, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>td, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>thead>tr>th {
    padding: 7px !important;
}
</style>
  <!-- Estilo borde de las imagenes -->
  <!-- Estilo borde de las imagenes -->

@section('content')
  <body class="contact-page">
<nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
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
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-5">
                <li class="nav-item active">
                    <a href="../home" class="nav-link">Explorar</a>
                </li>
                <li class="nav-item">
                    <a href="../perfil" class="nav-link">Perfil</a>
                </li>
            </ul>

            <form class="form-inline bg-white rounded m-0">
                <div class="form-group no-border">
                  <input type="text" class="form-control bg-white text-dark" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-neutral btn-icon btn-round">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/jbalvin.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">J Balvin Confirmo la Asistencia a tu evento</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-gift"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> Regalos.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/ozuna.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Ozuna te envio un Video</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/jbalvin.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">J Balvin te envio un Video</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> Regalos.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/christian.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Mike Alfredo te envio un Mensaje</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-envelope"></i> Invitaste a J Balvin (O.O) </p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/lora.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Lina Hernandez te envio un Mensaje</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-envelope"></i> Alicia como estas</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral btn-round btn-simple">
              <i class="fas fa-user"></i> Alicia Keys
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
 
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
        @include('template.default.sidebar.persona.artista-perfil')
          <div class="col-lg-6 bg-light pt-4" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="
              top: -130; 
              margin-bottom: -130;">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('assets/img/carouseljb1.jpg') }}" style="border-radius: 0px 100px 10px 5px;" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('assets/img/carouseljb2.jpg') }}" style="border-radius: 0px 100px 10px 5px;" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('assets/img/carouseljb3.jpg') }}" style="border-radius: 0px 100px 10px 5px;" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="row">
              <div class="col-lg-7">
                <h4 class="text-center text-dark mt-3 mb-0"> 3. Completa el <strong>Pago</strong></h4>
                <form class="mb-0 mt-0">
                  <div class="container"> 
                        <h3 class="text-white">  Tarjeta de Debito y Credito</h3>
                        <hr>  
                          <div class="container mx-auto"> 
                            <div class="row mx-auto"> 
                              <div class="col-12 mx-auto"> 
                                <h1 class="text-center m-0 p-0"><img src="{{ asset('assets/img/card.png') }}" class="" alt="..."></h1>
                                <br><h4 class="text-center">XXXXXXXXXXXXXXX-9806</h4>
                                <img src="{{ asset('assets/img/pse.png') }}" width="120px">
                                <img src="{{ asset('assets/img/payu.png') }}" width="130px">
                              </div>
                          </div>
                        </div> 
                      </div>
                </form>
              </div>
              <div class="col-lg-5">
                <h4 class="text-center text-dark mt-3"> &nbsp;</h4>
                  <div  class="card p-2">
                     <h3 class="text-white text-center mt-2">Total &dollar;24.000.000,00</h3>
                     <br><p class="text-white lead">Los pagos se procesarán internacionalmente. Es posible
                      que se apliquen comisiones bancarias adicionales.
                      Al hacer clic en el botón "Iniciar membresía", aceptas
                      nuestros Términos de uso y nuestra Declaración de
                      privacidad, y declaras que tienes más de 18 años.</p>
                    <a href="exito" class="btn mx-auto btn-success">Pagar</a>
              </div>
              </div>

            </div>
          </div>
          @include('template.default.sidebar.persona.artista-relacionado')
        </div>
      </div>
    </div>
  </div>
</body>
@endsection