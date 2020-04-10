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
        @include('template.default.sidebar.persona.filtro-busqueda')
          <div class="col-lg-6 bg-light pt-4">
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                      <br><br>
                      Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                    <div class="tab-pane" id="tab2">
                      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                      <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                    </div>
                    <div class="tab-pane" id="tab3">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                    </div>
                </div>
            </div>
          </div>
          @include('template.default.sidebar.persona.artista-relacionado')
        </div>
      </div>
    </div>
    </div>

  <!-- End Main -->
</body>
@endsection