<section class="section-content mb-4   team-template header-mobile">
<div class="container">


<div class="row">
<div class="col-lg-8 pt-5">
            <div class="row">
          
                <div class="col-lg-12 p-5">
                <h1 class="display-4 font-italic py-3">Jouw carrière begint hier!</h1>
                <p class="text-muted py-3">Zie hieronder al onze Vacatures</p>
    
                    <div class="row my-3 pt-5">
                    <div class="col-lg-4 col-md-4 col-sm-8 p-0">
                    <form action="{{route('vacatures')}}" method="GET">
                    @csrf
                    <select class="js-example-basic-single form-control search-slt border-warning bg-light" name="citysearch">
                            <option></option>
                                ...
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8 p-0">
                        <select class="js-example-basic-single2 form-control search-slt border-warning bg-light" name="categorysearch">
                            <option></option>
                                ...
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8 p-0">
                            <button type="submit" class="btn wrn-btn">Zoek Vacatures</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        




</div>
</div>
</section>