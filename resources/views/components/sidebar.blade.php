<div class="col-lg-4 bg-white rounded">
       <!--  Slider -->

       <div id="carouselContent" class="carousel slide mb-5" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-left">
            <div class="card">
            <img src="{{asset('/')}}img/team.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <img src="{{asset('/')}}img/logo4.jpg" alt="" class="rounded" width="45"><h5 class="card-title">Ik ben uitzendkracht</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Elke uitzendkracht die bij ons in loondienst komt krijgt een arbeidsovereenkomst en uitzendbevestiging ter beschikking voor het uitzenden. Bij indiensttreding start je altijd met een fase A arbeidsovereenkomst. </p>
                <a href="{{asset('/contact')}}" class="card-link">Zie meer</a>
                
            </div>
            </div>
            </div>
            <div class="carousel-item text-leftr">
                
            <div class="card">
            <img src="{{asset('/')}}img/boy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ik zoek Personeel</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">HOOP 4 EU heeft een grote database, die uitzending, detacheren of werven en selectie van personeel in verschillende branches en vakgebieden ter beschikking stelt.</p>
                <a href="{{asset('/contact')}}" class="card-link">Zie meer</a>
               
            </div>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Vorige</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Volgende</span>
        </a>
    </div>
    <!-- End Slider -->

    @include('components.icons')
        
    <!-- Over Ons -->

        <div class="p-3 bg-light rounded mt-5">
            <h4 class="font-italic">Over Hoop4eu</h4>
            <p class="mb-0">Het recruitment proces is niet simpelweg een kandidaat bij een bedrijf plaatsen, het is een proces waarbij je de juiste baan bij de juiste opdrachtgever weet te realiseren. Dat is waar hoop4eu voor staat. </p>
                <a href="{{asset('/over-ons')}}">Zie meer</a>
            </div>
        </div>
   <!-- End Over Ons -->