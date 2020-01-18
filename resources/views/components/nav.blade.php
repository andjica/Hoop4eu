  <!-- Navigation -->
  <div class="container p12 border-bottom">
      <header class="blog-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="row">
         
        <div class="col-2">
            <a class="blog-header-logo text-dark" href="{{asset('/')}}"><img src="{{asset('/')}}img/logo4.jpg" class="img-fluid logo-hoop"></a>
         </div> 
          <div class="col-10 pt-3 text-right">
          <div class="d-inline small"> <b class="text-info">Hoop 4 EU B.V.</b> &nbsp; &nbsp;<i class="fas fa-phone text-warning"></i> Telefoon: 0180 – 531191, &nbsp; <i class="fas fa-map-marker-alt text-warning"></i> Deventerseweg 50, 2994LD Barendrecht </div>
            
            <a class="text-muted small" href="mailto: abc@example.com">Email: info@hoop4eu.com</a><br>
            </div>
        </div>
      </header>
      </div>
     
  <nav class="navbar navbar-expand-lg navbar-light  shadow-sm">
  <a href="{{asset('/')}}" class="navbar-brand text-white font-weight-bold d-block d-lg-none"><img src="{{asset('/')}}img/logo4.jpg" class="img-fluid logo-hoop"></a>
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
                    <h6 class="font-weight-bold text-uppercase"> ik Zoek Werk &nbsp;<i class="fas fa-search fa-2x text-info"></i></h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0">Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">IT-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Zorg-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Techniek-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Bouw-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Engeneering-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Overige-Vacatures</a></li>
                        <li class="nav-item"><a href="{{route('vacatures-none')}}" class="nav-link lead pb-0 ">Alle-Vacatures</a></li>
                        

                      </ul>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <h6 class="font-weight-bold text-uppercase"> &nbsp; Hoop4eu info<i class="fas fa-business-time fa-2x text-info"></i></h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="../public/over-ons" class="nav-link lead pb-0 ">Over ons </a></li>
                        <li class="nav-item"><a href="../public/contact" class="nav-link lead pb-0 ">Contact</a></li>
                   
                       
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
      <li class="nav-item"><a href="{{route('contact')}}" class="nav-link font-weight-bold text-uppercase">AAnmelden als werkzoekende</a></li>
      <li class="nav-item"><a href="../public/over-ons" class="nav-link font-weight-bold text-uppercase">OVER HOOP4EU</a></li>
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
