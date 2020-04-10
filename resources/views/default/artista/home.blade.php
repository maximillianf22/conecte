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
  @include('template.default.navbar.artista.navbar')
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
 		@include('template.default.sidebar.artista.')
          <div class="col-lg-6 bg-light pt-4">
            <div class="info info-hover">
              <div class="icon icon-info">
                <img class="bg-blob" src="../assets/img/feature-blob/info.png">
                <i class="tim-icons icon-email-85"></i>
              </div>
              <h4 class="info-title">Email</h4>
              <p class="description"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b787e7b7b64797f4b72647e796e666a626725686466">[email&#160;protected]</a></p>
            </div>
          </div>
          <div class="col-lg-3 pt-4">
            <div class="info info-hover">
              <div class="icon icon-warning">
                <img class="bg-blob" src="../assets/img/feature-blob/warning.png">
                <i class="tim-icons icon-mobile"></i>
              </div>
              <h4 class="info-title">Phone Number</h4>
              <p class="description">+1(424) 535 3523</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  <!-- End Main -->
</body>
@endsection