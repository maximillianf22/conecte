  <nav class="navbar navbar-expand-lg fixed-top" style="background-image: linear-gradient(to right top, #000000, #060003, #090009, #080110, #030316);">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed and Coded by Developapp" data-placement="bottom">
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
            <ul class="navbar-nav mr-5">
                <li class="nav-item active">
                    <a href="welcome" class="nav-link">Explorar</a>
                </li>
                <li class="nav-item">
                    <a href="perfil" class="nav-link">Perfil</a>
                </li>
            </ul>

            <form class="form-inline bg-white rounded m-0">
                <div class="form-group no-border">
                  <input type="text" class="form-control bg-white text-dark" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-neutral btn-icon btn-round">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/christian.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Mike Alfredo te envio una solicitud de saludo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 215.000.000,00</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/julie.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Alicia Keys te envio una solicitud de saludo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 30 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 215.000.000,00</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/lora.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Lina Hernandez te envio una solicitud de saludo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 215.000.000,00</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px"  src="{{ asset('assets/img/james.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Jaime Snow te envio una solicitud de saludo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 9 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 215.000.000,00</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-gift"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> Regalos.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/christian.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Mike Alfredo te envio un Regalo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 21.000,00</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/lora.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Lina Hernandez te envio un regalo</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> $ 21.000,00</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> Regalos.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/christian.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Mike Alfredo te envio un Mensaje</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> Te amo J Balvin </p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="img-fluid  rounded shadow-lg img-thumbnail"  width="80px" src="{{ asset('assets/img/lora.jpg')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-dark text-sm">Lina Hernandez te envio un Mensaje</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0 text-dark"><i class="fas fa-money-bill-alt"></i> J Balvin te luciste en los premios</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral btn-round btn-simple">
              <i class="fas fa-user"></i> J Balvin
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>