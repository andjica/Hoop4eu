

<h3>Voeg nieuwe Vacature toe</h3>
    <form action="{{route('create-job')}}" method="POST">
    <h3 class="lead mt-3 text-muted">Voeg vacature toe</h3>
    @csrf
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
        <div class="form-group">
            <label for="title">Titel van vacature</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="functie titel">
            @if ($errors->has('title')) <p style="color:red;">{{ $errors->first('title') }}</p> @endif 
        </div>
        <div class="form-group">
            <label for="city">Kies Stad</label>
            <select class="custom-select"  name="city">
            @foreach($cities as $city)
                <option  value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="city">Kies Brance</label>
            <select class="custom-select"  name="category">
            @foreach($categories as $cat)
                <option  value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="desc1">Beschrijving vacature</label>
            <textarea class="form-control" rows="4" id="desc1" name="desc1"></textarea>   
            @if ($errors->has('desc1')) <p style="color:red;">{{ $errors->first('desc1') }}</p> @endif <br>

        </div>
        <div class="form-group">
            <label for="desc2">Voeg hier functie mogelijkheden</label>
            <textarea class="form-control" rows="4" id="desc2" name="desc2"></textarea> 
            @if ($errors->has('desc2')) <p style="color:red;">{{ $errors->first('desc2') }}</p> @endif   
        </div>
        <div class="form-group">
            <label for="desc3">Bedrijf omschrijving</label>
            <textarea class="form-control" rows="4" id="des3" name="desc3"></textarea> 
            @if ($errors->has('desc3')) <p style="color:red;">{{ $errors->first('desc3') }}</p> @endif   
        </div>
        <div class="form-group">
            <label for="desc3">Beschrijving Salaris</label>
            <textarea class="form-control" rows="4" id="des4" name="desc4"></textarea> 
            @if ($errors->has('desc4')) <p style="color:red;">{{ $errors->first('desc4') }}</p> @endif   
        </div>
        <div class="form-group">
        <label for="title1">Titel nummer 1</label>
        <input type="text" class="form-control" id="title1" name="title1" placeholder="Most wanted functie">
        @if ($errors->has('title1')) <p style="color:red;">{{ $errors->first('title1') }}</p> @endif 
        </div>
        <div class="form-group">
        <label for="title2">Titel nummer 2</label>
        <input type="text" class="form-control" id="title2" name="title2" placeholder="Most wanted functie">
        </div>
        <div class="form-group">
        <label for="title3">Titel nummer 3</label>
        <input type="text" class="form-control" id="title3" name="title3" placeholder="Most wanted functie">
        </div>
        <div class="form-group">
        <label for="title4">Titel nummer 4</label>
        <input type="text" class="form-control" id="title4" name="title4" placeholder="Most wanted functie">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="fulltime" name="fulltime"/>
            <label class="form-check-label" for="fulltime">
               Vol tijd
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="parttime" name="parttime">
            <label class="form-check-label" for="parttime">
               Deel tijd
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="tijdelijk" name="tijdelijk">
            <label class="form-check-label" for="tijdelijk">
             Tijdelijk
            </label>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Maak vacature aan</button>
        </div>
        </form>