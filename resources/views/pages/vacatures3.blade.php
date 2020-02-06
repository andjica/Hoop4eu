@include('components.header-banner')
@include('components.nav')
@include('components.jumbo')


<div class="container">
<div class="row">
<div class="col-lg-12">
           
           <div class="d-flex align-items-center  text-white-50 bg-white rounded shadow-sm">
               <img class="mr-3 logo-hoop" src="{{asset('/')}}img/logo4.png" style="    height: 58px;
" alt="hoop4eu" width="200" height="100">
               <div class="lh-100">
               <h5 class="mb-0 text-dark lh-100">Actuele Vacatures</h5>
              
               </div>
           </div>
       </div>
    </div>
</div>
<a href="#" id="nadji" class="d-lg-none"><i class="fas fa-search search-icon"></i></a>

<section class="section-content">
<div class="container border">
        <div class="row">
        <!-- Sidebar -->
        @include('components.filter')
            <!-- End Sidebar -->
            <!-- Jobs -->
           <div class="col-lg-8 shadow-sm order-first">
        

            <div class="my-3 p-3 bg-white shadow-sm">
            @foreach($jobs as $job)
           <div class="card mt-3">
               <div class="card-header">
               <u><a href="{{asset('/job/'.$job->id)}}" class="d-block link text-dark lead">{{$job->name}}</a></u>
               </div>
               <div class="card-body small">
               Posted on {{$job->created_at->format('d-m-Y')}}
                   <h5 class="card-title"><img src="{{asset('/')}}img/bag.jpg" alt="" class="mr-2 rounded" width="45">
                   <img src="{{asset('/img-categories/'.$job->category->img)}}" alt="{{$job->category->name}}" class="mr-2 rounded" width="45px">  
                   
                    </h5>
                    <strong class=" text-primary lead">Branche: {{$job->category->name}}</strong><br>
                    <p class="card-title"></p>

                   <p class="card-text">{{$job->desc1}}</p>
                   <i class="fas fa-clock text-info"></i> Full time : {{$job->fulltime ? 'ja' : 'nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Parttime  : {{$job->parttime ? 'ja' : 'nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Tijdelijk  : {{$job->tijdelijk ? 'ja' : 'nee'}} &nbsp; <br><br>
                        <p class="card-title"><i class="fas fa-map-marker-alt text-warning fa-2x"></i><b>Stad:</b> </i>{{$job->city->name}} </p>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-info">Bekijk vacature</a><br>
                
               </div>
              
           </div>

           @endforeach
       
           {{$jobs->appends(request()->query())->links()}}

   
          
  

        </div>
        <!-- End Jobs -->
       
</div>
</div>
</div>
</div>
</section>

@include('components.slider-icons')

@include('components.footer')