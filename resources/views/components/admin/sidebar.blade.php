<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header lead">Number of jobs: 30</div>
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-business-time fa-2x"></i></h5>
                <a href="{{route('home-admin')}}" class="card-text lead"><i class="fas fa-plus"></i>Add job</a><br>
                <a href="{{route('home-jobs')}}" class="card-text lead text-white"><i class="fas fa-plus"></i>Manage job</a>
            </div>
        </div>
        <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header lead">Number of cities: 30</div>
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-city fa-2x text-dark"></i></h5>
                <a href="{{route('home-create-city')}}" class="card-text lead text-dark"><i class="fas fa-plus"></i>Add city</a><br>
                <a href="{{route('home-cities')}}" class="card-text lead lead text-dark">Manage cities</a>
            </div>
        </div>
        <div class="card text-dark bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header lead text-white">Category</div>
            <div class="card-body">
            <i class="fas fa-sort fa-4x text-white"></i><br>
            <a href="{{route('home-create-category')}}" class="card-text lead text-white"><i class="fas fa-plus"></i>Add category</a><br>
            <a href="{{route('home-categories')}}" class="card-text lead text-white">Manage categories</a>
                
            </div>
        </div>