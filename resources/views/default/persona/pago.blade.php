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
              <div class="col-lg-6">
                <h4 class="text-center text-dark mt-3 mb-0"> 1. Completa el <strong>Formulario</strong></h4>
                <form class="mb-0 mt-0">
                  <fieldset>
                    <div class="container card shadow-lg">
                    <div class="form-check form-check-radio">
                         <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                               Cantar Estribillo (500.000,00)
                              <span class="form-check-sign"></span>
                          </label>
                      </div>
                    </div><br>
                    <div class="form-group">
                      <label>Nombre de la Cancion</label>
                      <input type="text" class="form-control text-dark" placeholder="Rojo Remix">
                    </div>
                    </div>
                    <div class="container card shadow-lg">
                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                            Deseo que el artista asista a mi Evento (50.000.000,00)
                            <span class="form-check-sign"></span>
                        </label>
                    </div><br>
                    <div class="input-group">
                        <input class="form-control form-control  text-dark datepicker" placeholder="Selecciona la Fecha" type="text">
                    </div>
                    <div class="form-group">
                      <label>Ingrese la hora</label>
                      <input type="text" class="form-control text-dark" placeholder="10:00 am">
                    </div>
                    <div class="form-check form-check-radio disabled">
                      <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" disabled>
                            Deseo que el artista se dirija a cada
                            invitado($50.000 x invitado)
                          <span class="form-check-sign"></span>
                      </label>
                  </div><br>
                  </div>
                    <br>
                  </fieldset>
                </form>
              </div>
              <div class="col-lg-6">
                <h4 class="text-center text-dark mt-3"> Solicita tu <strong>Saludo</strong></h4>
                <form class="mb-0 card shadow-lg">
                  <div class="container">
                <div class="form-group mt-2 mb-2">
                      <label>Dirigido a:</label>
                      <input type="text" class="form-control text-dark" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Dedicatoria</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Mensaje</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                    </div>
                    </div>
                  </form>

                  <div  class="card p-2">
                     <h6 class="text-white text-center ml-5 mr-5">Total &dollar;24.000.000,00</h6>
                    <a href="pago/opcional" class="btn mx-auto btn-success">Siguiente</a>
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