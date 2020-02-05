
        <div class="col-lg-12">
           
            <div class="d-flex align-items-center  text-white-50 bg-white rounded shadow-sm">
                <img class="mr-3 img-fluid logo-hoop" src="{{asset('/')}}img/logo4.png" alt="hoop4eu">
                <div class="lh-100">
                <h5 class="mb-0 text-dark lh-100">Actuele Vacatures</h5>
               
                </div>
            </div>
        </div>
        </div>

      <div class="row p-2">
            <div class="col-lg-8 bg-warning">
       
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Hoop4EU Vacatures</h6>
                @foreach($jobs as $job)
                <div class="card mt-3 text-center mb-5">
                    <div class="card-header">
                    <u><a href="{{asset('/job/'.$job->id)}}" class="d-block link text-dark lead">{{$job->name}}</a></u>
                    </div>
                    <div class="card-body">
                    <img src="{{asset('/img-categories/'.$job->category->img)}}" alt="{{$job->category->name}}" class="mr-2 rounded" width="45px">

                    <img src="{{asset('/')}}img/bag.jpg" alt="" class="mr-2 rounded" width="45">{{$job->category->name}}
                        <p class="card-text">{{$job->desc1}}</p>
                        <i class="fas fa-clock text-info"></i> Full time : {{$job->fulltime ? 'ja' : 'nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Parttime  : {{$job->parttime ? 'ja' : 'nee'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Deeltijd : {{$job->tijdelijk ? 'ja' : 'nee'}} &nbsp; <br>
                         <i class="fas fa-map-marker-alt text-primary"></i> {{$job->city->name}} 
                        <strong class="d-block text-primary lead">Branche: {{$job->category->name}}</strong><br>
                        <a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary">Bekijk vacature</a><br>
                        Geplaatst op: {{$job->created_at->format('d-m-Y')}}
                     
                    </div>
                   
                </div>
                @endforeach
                
                </div>
                <a href="{{route('vacatures-none')}}" type="button" class="btn btn-light btn-lg btn-block m-2">Zie meer vacatures <i class="fas fa-chevron-right"></i></a>

            </div>