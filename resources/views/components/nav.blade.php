  <!-- Navigation -->
  <div class="container p12  border-bottom">
      <header class="blog-header">
        <div class="row">
         
        <div class="col-2">
            <a class="blog-header-logo text-dark" href="{{asset('/')}}"><img src="{{asset('/')}}img/logo4.jpg" class="img-fluid logo-hoop"></a>
         </div> 
          <div class="col-10 pt-3 text-right">
          <div class="d-inline small"> <b class="text-info">Hoop 4 EU B.V.</b> &nbsp; &nbsp;<i class="fas fa-phone text-warning"></i> D-inlineTelefoon: 0180 – 531191, &nbsp; <i class="fas fa-map-marker-alt text-warning"></i> Deventerseweg 50, 2994LD Barendrecht </div>
            
            <a class="text-muted small" href="mailto: abc@example.com">Email: info@hoop4.eu</a><br>
            </div>
        </div>
      </header>
      </div>
      
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a href="#" class="navbar-brand text-white font-weight-bold d-block d-lg-none">MegaMenu</a>
  <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
      </button>
  <div id="navbarContent" class="collapse navbar-collapse">
    <ul class="navbar-nav mx-auto">
      <!-- Megamenu-->
      <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Ik ZOEK WERK</a>
        <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row bg-white rounded-0 m-0 shadow-sm">
              <div class="col-lg-7 col-xl-8">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                    <h6 class="font-weight-bold text-uppercase">ZOEK Werk &nbsp;<i class="fas fa-search fa-2x text-info"></i><i class="fas fa-user-md fa-2x text-info"></i></h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0">Vacatures</a></li>
                        <li class="nav-item"><a href="" class="nav-link lead pb-0 ">Ik ben uitzendkracht</a></li>
                        <li class="nav-item"><a href="" class="nav-link lead pb-0 ">Inschrijven / Open sollicitatie</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h6 class="font-weight-bold text-uppercase"> &nbsp;<i class="fas fa-business-time fa-2x text-info"></i><i class="fas fa-user-tie fa-2x text-info"></i></h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link lead pb-0 ">Ik ben ZZP’er </a></li>
                        <li class="nav-item"><a href="" class="nav-link lead pb-0 ">Vacature alert</a></li>
                      </ul>
                    </div>
                
              
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block image-meni"></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">IK ZOEK PERSONEEL</a></li>
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">WIE ZIJN WIJ</a></li>
      <li class="nav-item"><a href="{{route('contact')}}" class="nav-link font-weight-bold text-uppercase">Contact</a></li>
      @if (auth()->user())
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                           </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              </div>
        </li>
        <li class="nav-item"><a href="{{route('home-admin')}}" class="nav-link font-weight-bold text-uppercase">Admin dashboard</a></li>
      @endif
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase"></a></li>
    </ul>
  </div>
</nav>
<!-- End Navigation -->
