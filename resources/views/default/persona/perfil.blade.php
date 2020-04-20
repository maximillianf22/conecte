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
          @include('template.default.sidebar.persona.perfil')
          <div class="col-lg-6 bg-light pt-4">
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <div class="card bg-light">
                  <form role="form" class=" mb-0" id="contact-form" method="post" action="{{route('actulizarCliente')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="TIPO" value="1">
                    <div class="card-header text-center">
                      <h4 class="card-title text-white display-3"> <strong>Persona</strong></h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-name"></i></span>
                              </div>
                              <input class="form-control" placeholder="Nombre" name="NAME" value="{{$user->name}}" aria-label="Nombre" type="text">
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-6 pl-2">
                          <div class="form-group">
                            <div class="input-group bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-collection"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" value="{{$user->email}}" aria-label="Email" type="email" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 pl-2">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                              </div>
                              <input class="form-control" placeholder="Direccion" aria-label="Direccion" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                              </div>
                              <input class="form-control" placeholder="C.C/Nit/Pasaporte/CC ext " aria-label="C.C/Nit/Pasaporte/CC ext" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 pl-2">
                          <div class="form-group">
                            <div class="input-group bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-collection"></i></span>
                              </div>
                              <input type="text" class="form-control" name="celular" placeholder="Telefono" value="{{$user->celular}}" aria-label="Telefono">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                              </div>
                              <input class="form-control" placeholder="Contraseña" aria-label="Contraseña" type="password">
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <div class="input-group mb-4 bg-default rounded">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                              </div>
                              <input class="form-control" placeholder="Pais/Departamento" aria-label="pais" type="password">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                              <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                              <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Cedula</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input type="file" name="...">
                              </span>
                              <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="  fa fa-times"></i> Remove</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-3 class mt-4">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-circle img-raised">
                              <img src="{{ asset('assets/img/placeholder.jpg') }}" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                            <div>
                              <span class="btn btn-raised btn-round btn-default btn-file">
                                <span class="fileinput-new">Subir Foto</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input type="file" name="FOTO_PERFIL">
                              </span>
                              <br>
                              <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="tim-icons icon-simple-remove"></i> Remove</a>
                            </div>
                          </div>
                        </div>
                        <button class="nav-link btn-block  btn-success"> Guardar Cambios</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane bg-light mt-3 mb-3" id="tab2">
                <div class="container">
                  <h3 class="text-white"> Tarjeta de Debito y Credito</h3>
                  <h4 class="text-white lead mt-0"> Puedes ver y editar tarjetasde credito aqui </h4>
                  <hr>
                  <div class="container mx-auto">
                    <div class="row mx-auto">
                      <div class="col-6 mx-auto">
                        <img src="{{ asset('assets/img/card.png') }}" class="" alt="...">
                        <br>
                        <h4>XXXXXXXXXXXXXXX-9806</h4>
                        <div class="row mx-auto ml-0">
                          <div class="col-6">
                            <button class="btn btn-round btn-warning"> Editar</button>
                          </div>
                          <div class="col-6">
                            <button class="btn btn-round btn-danger"> Eliminar</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mx-auto">
                        <button class="btn btn-success btn-fab btn-icon btn-round btn-block btn-lg">
                          <h1 class="mt-3">+</h1>
                        </button> Añadir Tarjeta
                        <button class="btn btn-success btn-fab btn-icon btn-round btn-block btn-lg">
                          <h1 class="mt-3">+</h1>
                        </button> Añadir Cuenta Bancaria
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <table class="table">
                            <thead class="text-center">
                              <tr>
                                <th>Tipo</th>
                                <th>Artista</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Valor</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab3">
                <h2 class="text-center text-white mt-5">Historial de solicitudes </h2>
                <table class="table">

                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Artista</th>
                      <th>Mensaje</th>
                      <th>Fecha</th>
                      <th>Tipo</th>
                      <th class="text-right">Valor</th>
                      <th class="text-right"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(sizeof($historialDeDedicatorias)>=1)
                    @foreach ($historialDeDedicatorias as $item)
                    <tr>
                      <td class="text-center"><img src="{{ asset('assets/img/artistas')}}/{{$item->artista->first()->foto_perfil}}" alt="{{$item->artista->first()->name}}" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 50px;"></td>
                      <td>{{$item->artista->first()->name}}</td>
                      <td>{{$item->MENSAJE}}</td>
                      <td>{{$item->CREATED_AT}}</td>
                      <td>Dedicatoria</td>
                      <td class="text-right">&dollar; {{ number_format($item->COSTO_DEDICATORIA, 2) }}</td>
                      <td class="text-right"><a class="btn btn-success btn-sm ad-click-event btnVerResppuesta answer-solicitud" data-toggle="modal" data-target="#videoModal">Respuesta<i class="fa fa-check-circle-o" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                    @else
                    <div class="nofilterFoundPendientes">
                      No has realizado dedicartorias aun
                    </div>
                    @endif
                    @if(sizeof($historialDeContratacion)>=1)
                    @foreach ($historialDeContratacion as $item)
                    <tr>
                      <td class="text-center"><img src="{{ asset('assets/img/artistas')}}/{{$item->artista->first()->foto_perfil}}" alt="{{$item->artista->first()->name}}" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 50px;"></td>
                      <td>{{$item->artista->first()->name}}</td>
                      <td>{{$item->MENSAJE}}</td>
                      <td>{{$item->CREATED_AT}}</td>
                      <td>Contratacion</td>
                      <td class="text-right">&dollar; {{ number_format($item->COSTO_DEDICATORIA, 2) }}</td>
                      <td class="text-right"><a class="btnVideo btn btn-success btn-sm ad-click-event btnVerResppuesta answer-solicitud">Respuesta<i class="fa fa-check-circle-o" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                    @else
                    <div class="nofilterFoundPendientes">
                      No has realizado dedicartorias aun
                    </div>
                    @endif
                  </tbody>
                </table>
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

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>