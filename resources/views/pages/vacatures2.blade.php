@include('components.header-banner')
@include('components.nav')
@include('components.jumbo')

<div class="card border-0 shadow my-5">
<div class="container">
        <div class="row">
        <div class="col-lg-4 girl-back">
            
        </div>
            <div class="col-lg-8 pt-5">
            <h6 class="border-bottom border-gray pb-2 pt-5 pb-3 pl-3 mb-0 text-info">Stad: {{$city->name}} > &nbsp;Branche: {{$category->name}}</h6>
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
          

            <div class="my-3 p-3 bg-white shadow-sm ">
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
                   <i class="fas fa-clock text-info"></i> Full time : {{$job->fulltime ? 'ja' : 'Nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Parttime  : {{$job->parttime ? 'ja' : 'Nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Tijdelijk  : {{$job->tijdelijk ? 'ja' : 'Nee'}} &nbsp; <br><br>
                        <p class="card-title"><i class="fas fa-map-marker-alt text-warning fa-2x"></i><b>Stad:</b> </i>{{$job->city->name}} </p>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-info">Reageer op vacature</a><br>
                
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