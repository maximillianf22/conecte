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

  .table-condensed>tbody>tr>td,
  .table-condensed>tbody>tr>th,
  .table-condensed>tfoot>tr>td,
  .table-condensed>tfoot>tr>th,
  .table-condensed>thead>tr>td,
  .table-condensed>thead>tr>th {
    padding: 7px !important;
  }
</style>
<!-- Estilo borde de las imagenes -->
<!-- Estilo borde de las imagenes -->

@section('content')

<body class="contact-page">
  @include('template.default.navbar.persona.navbar')
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
          <div class="col-lg-6 bg-light pt-4">
            <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-none d-md-block d-lg-block" data-ride="carousel" style="
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
              <div class="col-lg-6 d-none d-sm-none d-md-block d-lg-block">
                <h4 class="text-center text-dark mt-3 mb-0"> 1. Completa el <strong>Formulario</strong></h4>
                <form class="mb-0 mt-0">
                  <fieldset>
                    <div class="container card shadow-lg">
                      <div class="form-check form-check-radio disabled">
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                            <input class="form-check-input disabled" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                            Cantar Estribillo (500.000,00) <br> <strong>PROXIMAMENTE</strong> luego del COVID-19
                            <span class="form-check-sign"></span>
                          </label>
                        </div>
                      </div><br>
                      <div class="form-group disabled">
                        <label>Nombre de la Cancion</label>
                        <input type="text" class="form-control text-dark" placeholder="Rojo Remix" disabled>
                      </div>
                    </div>
                    <div class="container card shadow-lg">
                      <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                          <input class="form-check-input disabled" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" disabled>
                          Deseo que el artista asista a mi Evento (50.000.000,00) <br> <strong>PROXIMAMENTE</strong> luego del COVID-19
                          <span class="form-check-sign"></span>
                        </label>
                      </div><br>
                      <div class="input-group disabled">
                        <input class="form-control form-control  text-dark datepicker disabled" placeholder="Selecciona la Fecha" type="text" disabled="">
                      </div>
                      <div class="form-group disabled">
                        <label>Ingrese la hora</label>
                        <input type="text" class="form-control text-dark disabled" placeholder="10:00 am" disabled>
                      </div>
                      <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" disabled>
                          Deseo que el artista se dirija a cada
                          invitado($50.000 x invitado) <br> <strong>PROXIMAMENTE</strong> luego del COVID-19
                          <span class="form-check-sign"></span>
                        </label>
                      </div><br>
                    </div>
                    <br>
                  </fieldset>
                </form>
              </div>
              <div class="col-lg-6 mb-3">
                <h4 class="text-center text-dark mt-3"> Solicita tu <strong>Saludo</strong></h4>
                <form class="mb-0 card shadow-lg" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);" action="{{ route('pedirDedicatoria') }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="ID_ARTISTA" value="{{$artista->id}}">
                  <input name="DE_PARTE_DE" id="DE_PARTE_DE" type="hidden" placeholder="De parte de " class="form-control" value="{{ $user->name }}" required autofocus>
                  <div class="container">
                    <div class="form-group mt-2 mb-2">
                      <label class="text-white"><strong>Dirigido a:</strong></label>
                      <input type="text" class="form-control text-dark" placeholder="Nombre" name="DIRIGIDO_A">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleFormControlTextarea1">Dedicatoria</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1" class="text-white"><strong>Mensaje</strong></label>
                      <textarea class="form-control text-dark" id="exampleFormControlTextarea1" rows="7" name="MENSAJE"></textarea>
                    </div>
                    @if(session('message_error'))
                    <p class="text-danger">{{session('message_error')}}</p>
                    @endif
                  </div>

                  <div class="card p-2" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
                    <h4 class="text-white text-center ml-5 mr-5"><strong>Total</strong> &dollar;150.000,00</h4>
                    <button type="submit" class="btn mx-auto btn-success btn-block">Siguiente</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
          @include('template.default.sidebar.persona.artista-independiente')
        </div>
      </div>
    </div>
  </div>
</body>
@endsection