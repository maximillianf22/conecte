<div class="col-lg-3 pt-4">
  <div class="row mx-auto mt-2">
    <div class="title container mb-0">
      <h5 class="text-uppercase">Artistas Independientes</h5>
    </div>
    <!-- @foreach($artistas as $artista)
    <div class="col-md-3 p-2">
      <img src="{{asset('storage/profile_images/artistas/'.$artista->foto_perfil)}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;">
      <span class="text-center">{{$artista->nombre_artistico}}</span>
    </div>
    @endforeach -->
    <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/maluma.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Maluma</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/ozuna.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Ozuna</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/faces/jbalvin.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Jbalvin</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/silvestre.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Silvestre</span>
                </div>
              </div>
              <div class="row mx-auto">
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/karolg.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Karol G</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/anuel.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Anuel</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/sech.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Sech</span>
                </div>
                <div class="col-md-3 p-2">
                  <img src="{{ asset('assets/img/beckyg.jpg')}}" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg img-thumbnail" style="width: 100px;"> 
                  <span class="text-center">Becky G</span>
                </div>
  </div>
  <div class="container mt-5 content-center">
    <img src="{{ asset('assets/img/cocacola.png')}}" class="shadow-lg text-center ml-2">
    <br>
    <ul class="navbar-nav">
      <div class="row mx-auto p-0 m-0">
        <li class="col-3  p-2">
          <a class="nav-link" rel="tooltip" title="Siguenos en Twitter" data-placement="bottom" href="#" target="_blank">
            <i class="fab fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="col-3  p-2">
          <a class="nav-link" rel="tooltip" title="Me Gusta en Facebook" data-placement="bottom" href="#" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="col-3 p-2">
          <a class="nav-link" rel="tooltip" title="Siguenos en Instagram" data-placement="bottom" href="#" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <li class="col-3  p-2">
          <a class="nav-link" rel="tooltip" title="Siguenos en Youtube" data-placement="bottom" href="#" target="_blank">
            <i class="fab fa-youtube"></i>
            <p class="d-lg-none d-xl-none">Youtube</p>
          </a>
        </li>
      </div>
    </ul>
  </div>
  <div class="container">
    <div class="row content-center mt-5">
      <img src="{{ asset('assets/img/brand/logoc.png')}}" width="70%" class=" mx-auto">
    </div>
  </div>
  <div class="row mb-4 mt-3 p-2">
    <div class="col-md-3 lead">Privacidad</div>
    <div class="col-md-3 lead">Condicion</div>
    <div class="col-md-3 lead">Publicidad</div>
    <div class="col-md-3 lead">Ayuda</div>
  </div>
</div>