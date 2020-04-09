@extends('template.default.layout.default')
@section('content')
<body class="index-page" style="background-color: #e0e1e3">
  @include('template.default.navbar.artista.navbar')
   <!-- Header -->
    <div class="wrapper section-signup m-0 p-0">
      <div class="page-header container-fluid m-0 p-0">
      <div class="container-fluid p-0 m-0">
        <div class="row">
          <div class="col-md-3 bg-default">
            <!-- Comeinza a maquetar aqui voy a colocar una imagen para q continues-->
            <div class="container"> 
              <div class="row">
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            
          </div>
          <div class="col-md-3 bg-default">
            <div class="container"> 
              <div class="row">
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
                <div class="col-md-3">
                  <img src="{{ asset('assets/img/mike.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 100px;">
                </div>
              </div>
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