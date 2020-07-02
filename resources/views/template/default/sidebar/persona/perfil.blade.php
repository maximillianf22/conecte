<div class="col-lg-3 pt-4" style="
    top: -160;
    margin-bottom: -160;">
  <div class="card card-profile" data-background="full" style="height: 435px;">
    <a href="javascript:;">
      <img class="img img-raised rounded" src="{{asset('assets/img/bg/perfil-persona.jpg')}}" style="height: auto; width: 100%">
    </a>
    <!--<div class="card-image">
      <div class="dropdown">
        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-camera"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
          <a class="dropdown-item" href="javascript:;">Cambiar foto</a>
        </div>
      </div>
    </div>-->
    <div class="card-body">
      <hr class="line-primary">
      <h3 class="job-title">{{$user->name}}</h3>
      <div class="table-responsive">
        <table class="table tablesorter " id="plain-table">
          <tbody>
            <tr>
              <td class="text-left">
                <i class="fas fa-money"></i> Saldo:
              </td>
              <td class="text-right">
                {{ number_format($user->billetera->SALDO, 2) }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @if(Route::current()->getName() == 'welcome')
   <div class="row mx-auto mt-5 d-none d-sm-none d-md-block d-lg-block">
    <div class="row mx-auto">
      <div class="col-md-12">
        <h4 class="text-white text-center mt-5">
          <img src="{{ asset('assets/img/balving.png')}}" class="shadow-lg"><br>
          www.conecte.co
        </h4>
      </div>
      <div class="mx-auto mt-2">
        <img src="{{ asset('assets/img/elite.jpg')}}" class="shadow-lg">
      </div>
    </div>
  </div>
  @else
  <div class="row mx-auto mt-2 d-none d-sm-none d-md-block d-lg-block">
    <div class="row mx-auto">
      <div class="col-md-12">
        <ul class="nav nav-pills nav-pills-info flex-column">
          <li class="nav-item"><a class="nav-link {{Request::is('*/informacion') ? 'active' : ''}} btn-block" href="informacion">Informacion</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('*/pagos') ? 'active' : ''}} btn-block" href="pagos">Metodo de Pago</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('*/historial') ? 'active' : ''}} btn-block" href="historial">Historial de Solicitudes</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('*/pagos') ? 'active' : ''}} btn-block" href="#" data-toggle="modal" data-target="#idModalOpenRecharge">Depositar</a></li>
        </ul>
      </div>
      <div class="mx-auto">
        <img src="{{ asset('assets/img/elite.jpg')}}" class="shadow-lg">
      </div>
    </div>
  </div>
@endif
</div>
