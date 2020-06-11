@extends('template.default.layout.newDefault')

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
</style>
<!-- Estilo borde de las imagenes -->
<!-- Estilo borde de las imagenes -->

@section('navbar')
@include('template.default.navbar.persona.navbar')
@endsection

@section('sidebarL')
@include('template.default.sidebar.persona.perfil')
@endsection

@section('middle')
<div class="row mx-auto mt-2 d-block d-sm-block d-md-none d-lg-none bg-dark " style="z-index: 9; border-radius: 3rem">
    <div class="row mx-auto mt-3">
      <div class="col-md-12">
        <ul class="nav nav-pills nav-pills-info flex-column">
          <li class="nav-item"><a class="nav-link {{Request::is('*/informacion') ? 'active' : ''}} btn-block" href="informacion">Informacion</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('*/pagos') ? 'active' : ''}} btn-block" href="pagos">Pagos</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('*/historial') ? 'active' : ''}} btn-block" href="historial">Historial de Solicitudes</a></li>
        </ul>
      </div>
    </div>
  </div>
@if($section == 'informacion')
@include('default.persona.perfil.informacion')
@endif

@if($section == 'pagos')
@include('default.persona.perfil.pagos')
@endif

@if($section == 'historial')
@include('default.persona.perfil.historial')
@endif

@endsection

@section('sidebarR')
@include('template.default.sidebar.persona.artista-relacionado')
@endsection

@section('modals')
<div class="modal" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #525f7f">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col text-center">
            <video id="videoPlayer" controls class="d-none d-sm-none d-ms-block d-lg-block mx-auto">
              <source id="video" type="video/mp4" src="">
            </video>
            <video id="videoPlayer" controls style="width: 100%;" class="d-block d-sm-block d-ms-none d-lg-none mx-auto">
              <source id="video" type="video/mp4" src="">
            </video>
            <p style="color:white; font-weight: bold;padding-top: 30px;">Compartir a través del link </p>
            <p class="videoLink" style="border:1px solid #FF578A;color:#FF578A; width: 100%;padding:5px 60px;border-radius:30px;"></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection