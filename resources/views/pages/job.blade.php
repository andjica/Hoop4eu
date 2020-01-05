@include('components.header-banner')
@include('components.nav')
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8 bg-white mt-4 pt-3">
      @if(session('success'))
      <div class="alert alert-success">
                <img src="{{asset('/')}}img/success.jpg" class="img-fluid rounded-circle" width="45px">
				 {{session('success')}}
				 <i class="fas fa-check"></i>
                </div>
        @endif
        <button type="button" class="btn btn-primary my-2" onclick="goBack()">
        <i class="fas fa-arrow-left"></i> Back
        </button>
     
        <!-- Title -->
        <h1 class="mt-4"> {{$job->name}}<img class="img-fluid rounded" width="55" src="{{asset('/')}}img/bag.jpg" alt="hoop4eu vacature"></h1>
        <h4>#idVacature:{{$job->id}}</h4>
        <!-- Author -->
        <p class="lead">
        <i class="fas fa-city  text-warning"></i> City: {{$job->city->name}} &nbsp;&nbsp; <i class="fas fa-sort  text-warning"></i> Category: {{$job->category->name}} <br><br>
        <i class="fas fa-clock text-info"></i> Full time : {{$job->fulltime ? 'Yes' : 'No'}} &nbsp;
        <i class="fas fa-clock text-info"></i> Parttime time : {{$job->parttime ? 'Yes' : 'No'}} &nbsp;
        <i class="fas fa-clock text-info"></i> Tijdelijk time : {{$job->tijdelijk ? 'Yes' : 'No'}} &nbsp;
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$job->created_at->format('d-m-Y')}}</p>
    
        @if (auth()->user())
            <a href="{{asset('/delete-job/'.$job->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt text-white"></i>&nbsp;Delete job</a>
            <a href="{{asset('/edit-job/'.$job->id)}}" class="btn btn-warning">Update this job</a>
         @else
        <button type="button" id="apply" class="btn btn-info search-slt2 btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
        Apply for a job
      </button>
      @endif
      
        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset('/')}}img/job.jpg" alt="hoop4eu vacature">

        <hr>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="jobname" value="{{$job->name}}">
                <input type="hidden" name="jobid" value="{{$job->id}}">
                <div class="form-group">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Andjela" name="firstname">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Stojanovic" name="lastname">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="email-add" placeholder="andjela@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">If you have CV send to Us</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="pdffile" placeholder="name@example.com">
                </div>
            <input type="hidden" name="category" value="{{$job->category->name}}">
            <input type="hidden" name="city" value="{{$job->city->name}}">
            </div>
            <div class="modal-body">
            <h3 class="mt-4"> {{$job->name}}<img class="img-fluid rounded" width="55" src="{{asset('/')}}img/bag.jpg" alt="hoop4eu vacature"></h3>
            <h4>#idVacature:  {{$job->id}}</h4>
                <!-- Author -->
                <p class="lead">
                <i class="fas fa-city  text-warning"></i> City: {{$job->city->name}} &nbsp;&nbsp; <i class="fas fa-sort  text-warning"></i> Category: {{$job->category->name}}
                </p>
            </div>
          
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="job-apply-popup"class="btn btn-primary">Apply for a job</button>
            </div>
            </div>
        </div>
        </form>
        </div>

        <!-- Post Content -->
        <p class="lead">{{$job->desc1}}</p>
        <p>{{$job->desc2}} </p>
        <p>{{$job->desc3}} </p>
        <ul class="list-group list-group-flush pt-3 pb-3">
            @foreach($job->titles as $title)
            <li class="list-group-item"><i class="fas fa-check fa-2x text-success"></i></i> &nbsp; {{$title->title1}}</li>
            <li class="list-group-item"><i class="fas fa-check fa-2x text-success"></i></i> &nbsp; {{$title->title2}}</li>
            <li class="list-group-item"><i class="fas fa-check fa-2x text-success"></i></i> &nbsp; {{$title->title3}}</li>

            <li class="list-group-item"><i class="fas fa-check fa-2x text-success"></i></i> &nbsp; {{$title->title4}}</li>

            @endforeach
            </ul>
        <blockquote class="blockquote">
          <p class="mb-0 lead">{{$job->desc4}}</p>
          <footer class="blockquote-footer">Posted by 
            <cite title="Source Title">Hoop4eu on {{$job->created_at->format('d-m-Y')}}</cite>
          </footer>
        </blockquote>
       
        <hr>



      </div>
      <!-- End Job -->
      <div class="col-lg-4 mt-4 bg-light border">
        <img class="mr-3 p-3" src="{{asset('/')}}img/girljob2.jpg" alt="hoop cv image" class="img-fluid">
            @include('components.icons')
            @foreach($sidejob as $onejob)
            <div class="card mt-3 text-center mb-5">
                    <div class="card-header">
                    <u><a href="#" class="d-block link text-dark lead">{{$onejob->name}}</a></u>
                    </div>
                    <div class="card-body">
                    <img src="{{asset('/')}}img/bag.jpg" alt="" class="mr-2 rounded" width="45">                        
                    <p class="card-text">{{$onejob->desc1}}</p>
                        <i class="fas fa-clock text-info"></i> Full time : {{$onejob->fulltime ? 'Yes' : 'No'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Parttime time : {{$onejob->parttime ? 'Yes' : 'No'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Tijdelijk time : {{$onejob->tijdelijk ? 'Yes' : 'No'}} &nbsp;<br> 
                        City: {{$onejob->city->name}}
                        <strong class="d-block text-primary lead">Category: {{$onejob->category->name}}</strong><br>
                        <a href="{{asset('/job/'.$onejob->id)}}" class="btn btn-primary">Zie meer</a><br>

                        Nov 12 2019
                    </div>
               
                </div>
                @endforeach
        </div>

    </div>
    <div class="row">
    @foreach($jobs as $js)
        <div class="col-lg-4">
       
        <div class="card mt-3 text-center mb-5">
                    <div class="card-header">
                    <u><a href="#" class="d-block link text-dark lead">{{$js->name}}</a></u>
                    </div>
                    <div class="card-body">
                    <img src="{{asset('/')}}img/bag.jpg" alt="" class="mr-2 rounded" width="45">
                        <p class="card-text">{{$js->desc1}}</p>
                        <i class="fas fa-clock text-info"></i> Full time : {{$js->fulltime ? 'Yes' : 'No'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Parttime time : {{$js->parttime ? 'Yes' : 'No'}} &nbsp;
                        <i class="fas fa-clock text-info"></i> Tijdelijk time : {{$js->tijdelijk ? 'Yes' : 'No'}} &nbsp;<br>
                        City: {{$js->city->name}} 
                    <strong class="d-block text-primary lead">Category: {{$js->category->name}}</strong><br>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary">Zie meer</a><br>
                    {{$js->created_at->format('d-m-Y')}}
                    </div>
                   
            </div>
         
        </div>
        @endforeach
      
    </div>
</div>
@include('components.footer')