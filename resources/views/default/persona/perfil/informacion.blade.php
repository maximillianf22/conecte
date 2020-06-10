<div class="col-lg-6 bg-light pt-4">
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
                <input class="form-control text-dark" placeholder="Nombre" name="NAME" value="{{$user->name}}" aria-label="Nombre" type="text">
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
                <input class="form-control text-dark" placeholder="Email" value="{{$user->email}}" aria-label="Email" type="email" readonly>
              </div>
            </div>
          </div>
          <div class="col-6 pl-2">
            <div class="form-group">
              <div class="input-group mb-4 bg-default rounded">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                </div>
                <input class="form-control text-dark" placeholder="Direccion" aria-label="Direccion" type="text">
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
                <input class="form-control text-dark" placeholder="C.C/Nit/Pasaporte/CC ext " aria-label="C.C/Nit/Pasaporte/CC ext" type="text">
              </div>
            </div>
          </div>
          <div class="col-6 pl-2">
            <div class="form-group">
              <div class="input-group bg-default rounded">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-collection"></i></span>
                </div>
                <input type="text" class="form-control text-dark" name="celular" placeholder="Telefono" value="{{$user->celular}}" aria-label="Telefono">
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
                <input class="form-control text-dark" placeholder="Contraseña" aria-label="Contraseña" type="password">
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <div class="input-group mb-4 bg-default rounded">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                </div>
                <input class="form-control text-dark" placeholder="Pais/Departamento" aria-label="pais" type="password">
              </div>
            </div>
          </div>
        </div>
      <!--<div class="row">
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
                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fas fa-window-close"></i> Remove</a>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </form>
  </div>
</div>