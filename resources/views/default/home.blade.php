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
    <!-- Navbar -->
  @include('template.default.navbar.persona.navbar')
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
        @include('template.default.sidebar.persona.perfil')
          <div class="col-lg-6 bg-light pt-4 p-5">
            <div class="container">
              <form action="{{ route('welcome')}}" method="get" class="form-inline rounded m-0 ">
                <div class="form-group no-border">
                  <input type="text" class="form-control bg-white text-dark"  name="query" value="{{$query}}" placeholder="Busca tu artista favorito">
                </div>&nbsp;&nbsp;
                <button type="submit" class="btn btn-neutral btn-icon float-right btn-round ml-3 d-none d-sm-none d-md-block d-lg-block">
                    <i class="fas fa-search"></i>
                </button>
            </form> 
            </div>
            <div class="container">
                  <div class="card">
                    <div class="row mb-4">
            <div class="title container mb-0">
              <h3 class="text-uppercase text-white text-center">Artistas del Momento</h3>
            </div>
              @if(count($artistas)>=1)
                @foreach($artistas as $Artistas)
                @if($loop->iteration > 8)
                <div class="col-md-3 col-6 text-white text-center">
                <a href="{{route('artista',$Artistas->nombre_artistico)}}">
                    <div class="avatar " style="height: 60px; width: 60px; border: .2rem solid !important; border-color: #d89d7a !important;">
                      <img class="media-object img-raised" src="{{asset('/assets/img/artistas/'.$Artistas->foto_perfil)}}" alt="..." style="height: 100% !important;">
                    </div>
                    <p class="text-center text-white">
                       @if(empty($Artistas->nombre_artistico))
                              {{$Artistas->name}}
                          @else
                              {{$Artistas->nombre_artistico}}
                        @endif
                    </p>
                </a>
                </div>
                @endif
                @endforeach
              @endif
                </div>
              </div>
            </div>
            @if (count($artistas) == 0)
                <div class="container">
                    <h2 class="text-muted">No se encontraron resultados para "{{ $query }}"</h2>
                </div>
            @endif
            </div>         
         @include('template.default.sidebar.persona.artista-relacionado')
        </div>
      </div>
    </div>
    </div>


  <!-- End Main -->
</body>
@endsection