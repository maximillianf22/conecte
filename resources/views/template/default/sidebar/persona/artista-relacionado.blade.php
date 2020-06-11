<div class="col-lg-3 pt-4 mb-0">
 <div class="row mx-auto">
   	<div class="title container mb-0">
   		<h5 class="text-uppercase">Artistas Relacionados</h5>
   	</div>
        @foreach($artistas as $artista)
          @if($loop->iteration < 9)
            <div class="col-md-3 col-3 p-2 mx-auto">
                <div class="avatar " style="height: 60px; width: 60px; border: .2rem solid !important; border-color: #d89d7a !important;">
                  <img class="media-object img-raised" src="{{asset('/assets/img/artistas/'.$artista->foto_perfil)}}" alt="..." style="height: 100% !important;">
                </div>
                  <p class="text-center">{{$artista->nombre_artistico}}</p>
            </div>
            @endif
        @endforeach
            </div>
            <div class="mx-auto content-center">
              <div class="row">
                <div class="col-1"></div>
            	   <div class="col-10">
                   <div class="row mt-4">
                      <span class="badge badge-pill col-4 badge-primary">#Regaeton</span>
                      <span class="badge badge-pill col-4 badge-info ">#Artista</span>
                      <span class="badge badge-pill col-4 badge-success ">#Influencer</span>
                      <span class="badge badge-pill col-4 badge-danger">#Pop</span>
                      <span class="badge badge-pill col-4 badge-warning ">#Vallenato</span>
                      <span class="badge badge-pill col-4 badge-default ">#Conecte</span>
                    </div>
                    <br>
                   <img src="{{ asset('assets/img/cocacola.png')}}" class="shadow-lg mx-auto">
                 </div>
                <div class="col-1"></div>
              </div>
            	<br>
            	<ul class="navbar-nav d-none d-sm-none d-md-block d-lg-block">
            	 <div class="row mx-auto">
                <li class="col-3">
                  <a class="nav-link text-center" rel="tooltip" title="Siguenos en Twitter" data-placement="bottom" href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                    <p class="d-lg-none d-xl-none">Twitter</p>
                  </a>
                </li>
                <li class="col-3">
                  <a class="nav-link text-center" rel="tooltip" title="Me Gusta en Facebook" data-placement="bottom" href="#" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                    <p class="d-lg-none d-xl-none">Facebook</p>
                  </a>
                </li>
                <li class="col-3">
                  <a class="nav-link text-center" rel="tooltip" title="Siguenos en Instagram" data-placement="bottom" href="#" target="_blank">
                    <i class="fab fa-instagram"></i>
                    <p class="d-lg-none d-xl-none">Instagram</p>
                  </a>
                </li>
                <li class="col-3">
                  <a class="nav-link text-center" rel="tooltip" title="Siguenos en Youtube" data-placement="bottom" href="#" target="_blank">
                    <i class="fab fa-youtube"></i>
                    <p class="d-lg-none d-xl-none">Youtube</p>
                  </a>
                </li>
               </div>
              </ul>
            </div>
            <div class="container">
              <div class="row content-center mt-4">
              <img src="{{ asset('assets/img/brand/logoc.png')}}" width="70%" class=" mx-auto">
              </div>
            </div>
            <div class="row mb-4 mt-3 p-2">
              <div class="col-3 lead">Privacidad</div>
              <div class="col-3 lead">Condicion</div>
              <div class="col-3 lead">Publicidad</div>
              <div class="col-3 lead">Ayuda</div>
            </div>
</div>