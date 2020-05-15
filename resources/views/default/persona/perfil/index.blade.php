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
            <video id="videoPlayer" controls>
              <source id="video" type="video/mp4" src="">
            </video>
            <p style="color:white; font-weight: bold;padding-top: 30px;">Compartir a través de </p>
            <ul class="list-inline" style="padding-top: 30px;">
              <li class="list-inline-item link-actions" onclick="share()" style="color: rgb(255,255,255); cursor: pointer">
                <img src="http://conecte.co/assets/img/instagram.svg" style="padding: 8px;">
              </li>
              <li class="list-inline-item" onclick="share()" style="color: rgb(255,255,255); cursor: pointer">
                <img src="http://conecte.co/assets/img/twiter.svg" style="padding: 8px;">
              </li>
              <li class="list-inline-item" onclick="share()" style="color: rgb(255,255,255); cursor: pointer">
                <img src="http://conecte.co/assets/img/facebook.svg" style="padding: 8px;">
              </li>
              <li class="list-inline-item" style="color: rgb(255,255,255); cursor: pointer">
                <a class="videoLinkDownload" download="dedicatoria.mp4">
                  <img src="http://conecte.co/assets/img/descargar.svg" style="padding: 8px;" height="45px">
                </a>
              </li>
              <p style="font-size:14px; color:white; font-weight: 400; padding-top: 30px;">también puedes compartir el link</p>
              <p class="videoLink" style="border:1px solid #FF578A;color:#FF578A; width: fit-content;padding:5px 60px;border-radius:30px;"></p>
            </ul>
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