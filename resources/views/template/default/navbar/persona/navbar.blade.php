  <nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom" target="_blank">
          <img src="{{ asset('assets/img/brand/logoc.png')}}" width="55%">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                <img src="{{ asset('assets/img/brand/logoa.png')}}" width="60%">
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="javascript:;" class="nav-link">Explorar</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">Grupos</a>
                </li>
            </ul>

            <form class="form-inline bg-white rounded">
                <div class="form-group no-border">
                  <input type="text" class="form-control bg-white text-dark" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-neutral btn-icon btn-round">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Notificaciones" data-placement="bottom" href="#" target="_blank">
              <i class="fas fa-bell"></i>
              <p class="d-lg-none d-xl-none">Notificaciones</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Regalos" data-placement="bottom" href="#" target="_blank">
              <i class="fas fa-gift"></i>
              <p class="d-lg-none d-xl-none">Regalos</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="MEnsajes" data-placement="bottom" href="#" target="_blank">
              <i class="fas fa-envelope"></i>
              <p class="d-lg-none d-xl-none">Mensajes</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral btn-round btn-simple">
              <i class="fas fa-user"></i> Maximillian 
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>