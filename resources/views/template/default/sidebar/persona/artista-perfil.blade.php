<div class="col-lg-3 pt-4" style="
    top: -160; 
    margin-bottom: -160;">
  <div class="card card-profile card-background">
      <div class="full-background" style="background-image: url('{{asset('/assets/img/artistas/'.$artista->foto_perfil)}}')">
    </div>
      <div class="card-body mt-5">
      <h3 class="job-title text-center text-white" style="margin-top: 200px">{{$artista->nombre_artistico}}</h3>
      <div class="table-responsive">
        <table class="table tablesorter " id="plain-table">
          <tbody>
            <div class="container bg-light p-2 rounded" style="opacity: 0.8">
              <span class="badge badge-pill badge-primary">#Artista</span>
              <span class="badge badge-pill badge-info">#Farandula</span>
              <span class="badge badge-pill badge-success">#Influencer</span>
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row mx-auto mt-2 d-none d-sm-none d-md-block d-lg-block">
    <div class="row mx-auto">
      <div class="col-md-12">
        <div class="container mt-2 mb-2 content-center">
          <ul class="navbar-nav">
            <div class="row mx-auto p-0 m-0">
              <li class="col-3 ">
                <a class="nav-link" rel="tooltip" title="Siguenos en Twitter" data-placement="bottom" href="#" target="_blank">
                  <i class="fab fa-twitter"></i><br> 
                  <p class="d-lg-none d-xl-none">Twitter</p>
                </a>
              </li>
              <li class="col-3 ">
                <a class="nav-link" rel="tooltip" title="Me Gusta en Facebook" data-placement="bottom" href="#" target="_blank">
                  <i class="fab fa-facebook-square"></i> 
                  <p class="d-lg-none d-xl-none">Facebook</p>
                </a>
              </li>
              <li class="col-3">
                <a class="nav-link" rel="tooltip" title="Siguenos en Instagram" data-placement="bottom" href="#" target="_blank">
                  <i class="fab fa-instagram"></i> 
                  <p class="d-lg-none d-xl-none">Instagram</p>
                </a>
              </li>
              <li class="col-3 ">
                <a class="nav-link" rel="tooltip" title="Siguenos en Youtube" data-placement="bottom" href="#" target="_blank">
                  <i class="fab fa-youtube"></i>
                  <p class="d-lg-none d-xl-none">Youtube</p>
                </a>
              </li>
            </div>
          </ul>
        </div>
        <h4 class="text-white text-center">
          <img src="{{ asset('assets/img/balving.png')}}" class="shadow-lg"><br>
          >>www.conecte.co<<
        </h4>
      </div>
      <div class="mx-auto mt-2">
        <img src="{{ asset('assets/img/elite.jpg')}}" class="shadow-lg">
      </div>
    </div>
  </div>
</div>