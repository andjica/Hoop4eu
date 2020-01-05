
<h3>Add new Vacature</h3>
    <form action="{{route('create-job')}}" method="POST">
    <h3 class="lead mt-3 text-muted">Add vacature</h3>
    @csrf
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
        <div class="form-group">
            <label for="title">Title of vacature</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Php programer">
            @if ($errors->has('title')) <p style="color:red;">{{ $errors->first('title') }}</p> @endif 
        </div>
        <div class="form-group">
            <label for="city">Choose city</label>
            <select class="custom-select"  name="city">
            @foreach($cities as $city)
                <option  value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="city">Choose category</label>
            <select class="custom-select"  name="category">
            @foreach($categories as $cat)
                <option  value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="desc1">Description 1</label>
            <textarea class="form-control" rows="4" id="desc1" name="desc1"></textarea>   
            @if ($errors->has('desc1')) <p style="color:red;">{{ $errors->first('desc1') }}</p> @endif <br>

        </div>
        <div class="form-group">
            <label for="desc2">Description 2</label>
            <textarea class="form-control" rows="4" id="desc2" name="desc2"></textarea> 
            @if ($errors->has('desc2')) <p style="color:red;">{{ $errors->first('desc2') }}</p> @endif   
        </div>
        <div class="form-group">
            <label for="desc3">Description 3</label>
            <textarea class="form-control" rows="4" id="des3" name="desc3"></textarea> 
            @if ($errors->has('desc3')) <p style="color:red;">{{ $errors->first('desc3') }}</p> @endif   
        </div>
        <div class="form-group">
            <label for="desc3">Description 4</label>
            <textarea class="form-control" rows="4" id="des4" name="desc4"></textarea> 
            @if ($errors->has('desc4')) <p style="color:red;">{{ $errors->first('desc4') }}</p> @endif   
        </div>
        <div class="form-group">
        <label for="title1">Title one</label>
        <input type="text" class="form-control" id="title1" name="title1" placeholder="Most wanted functie">
        @if ($errors->has('title1')) <p style="color:red;">{{ $errors->first('title1') }}</p> @endif 
        </div>
        <div class="form-group">
        <label for="title2">Title two</label>
        <input type="text" class="form-control" id="title2" name="title2" placeholder="Most wanted functie">
        </div>
        <div class="form-group">
        <label for="title3">Title three</label>
        <input type="text" class="form-control" id="title3" name="title3" placeholder="Most wanted functie">
        </div>
        <div class="form-group">
        <label for="title4">Title four</label>
        <input type="text" class="form-control" id="title4" name="title4" placeholder="Most wanted functie">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="fulltime" name="fulltime"/>
            <label class="form-check-label" for="fulltime">
               Full time
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="parttime" name="parttime">
            <label class="form-check-label" for="parttime">
               Part time
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="tijdelijk" name="tijdelijk">
            <label class="form-check-label" for="tijdelijk">
             Tijdelijk
            </label>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>