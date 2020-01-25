@include('components.header')
@include('components.header-banner')
@include('components.nav')
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8 bg-white mt-4 pt-3 border">
        <button type="button" class="btn btn-primary my-2" onclick="goBack()">
        <i class="fas fa-arrow-left"></i> Terug
        </button>
        
        
        <hr>

       
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <form action="{{route('send-email')}}" method="POST" id="contactform">
                @csrf
                <div class="form-group">
                    <label for="firstname">Voornaam</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="your name">
              
                </div>
                <div class="form-group">
                    <label for="lastname">Achternaam</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="your last name">
                </div>
                <div class="form-group">
                    <label for="email">Email adres</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="your email address">
                </div>
                <div class="form-group">
                    <label for="cv">Voeg hier uw CV toe</label>
                    <input type="file" class="form-control" id="cv"  name="cv" placeholder="name@example.com">
                </div>      
                <button type="submit" class="btn btn-primary btn-block">Verzenden</button>
                <p class="small">Wij zullen zo spoedig mogelijk met u contact opnemen!</p>
                <input type="hidden" name="jobname" value="{{$job->name}}">
                <input type="hidden" name="jobid" value="{{$job->id}}">
                <input type="hidden" name="category" value="{{$job->category->name}}">
                <input type="hidden" name="city" value="{{$job->city->name}}">
            </form>
            <!-- Title -->
            <h1 class="mt-4"> {{$job->name}}<img class="img-fluid rounded" width="55" src="{{asset('/')}}img/bag.jpg" alt="hoop4eu vacature"></h1>
                <!-- Author -->
                <p class="lead">
                <i class="fas fa-city  text-warning"></i> Stad: {{$job->city->name}} &nbsp;&nbsp; <i class="fas fa-sort  text-warning"></i> Branche: {{$job->category->name}}
                </p>
           
        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$job->created_at->format('d-m-Y')}}</p>
        <!--<p> <b>Salary between</b> 3600,00 and 3800,00</p>-->


            </div>
    

      <!-- End Job -->
      <div class="col-lg-4 mt-4 bg-light border">
        <img class="mr-3 p-3" src="{{asset('/')}}img/girljob2.jpg" alt="hoop cv image" class="img-fluid">
            @include('components.icons')
    
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
                        <i class="fas fa-clock text-info"></i> Tijdelijk  : {{$js->tijdelijk ? 'Yes' : 'No'}} &nbsp;<br>
                        Stad: {{$js->city->name}} 
                    <strong class="d-block text-primary lead">Branche: {{$js->category->name}}</strong><br>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary">Zie meer</a><br>
                    {{$js->created_at->format('d-m-Y')}}
                    </div>
                   
            </div>
         
        </div>
        @endforeach
      
    </div>
</div>
@include('components.footer')