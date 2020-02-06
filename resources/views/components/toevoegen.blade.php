





<div class="col-lg-12" style="    display: flex;">

    <div class="col-lg-4" style="    display: grid;   height: 220px; ">
    <h4>Handige links</h4>
        <a href="{{ route('erp') }}" class="btn btn-primary kenzo">Overzicht Pagina</a>
        <a href="{{ route('home-admin') }}" class="btn btn-primary kenzo">Dashboard</a>
        <a href="./" class="btn btn-primary kenzo">Terug naar Hoop4EU</a>
    

    </div>
    <div class="col-lg-8">
    <form action="{{route('create-people')}}" method="POST">
    @csrf
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
  <div class="form-group">
      <label for="exampleInputEmail1">Voornaam</label>
      <input type="text" class="form-control" name="first" aria-describedby="emailHelp" placeholder="Voornaam">
      @if ($errors->has('first')) <p style="color:red;">{{ $errors->first('first') }}</p> @endif 

    </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Achternaam</label>
    <input type="text" class="form-control" name="last" aria-describedby="emailHelp" placeholder="Achternaam">
    @if ($errors->has('last')) <p style="color:red;">{{ $errors->first('last') }}</p> @endif 

  </div>
  
  <div class="form-group">
      <input type="date" class="form-control" name="date"
       value="2018-07-22"
       min="1940-01-01" max="2018-12-31">
       @if ($errors->has('date')) <p style="color:red;">{{ $errors->first('date') }}</p> @endif 

  </div>
 
  
  <div class="form-group">
    <label for="exampleInputEmail1">BSN-Nummer</label>
    <input type="text" class="form-control" name="bsn" aria-describedby="emailHelp" placeholder="BSN-Nummer">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Functie </label>
    <input type="text" class="form-control" name="functie" aria-describedby="emailHelp" placeholder=" Functie">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif 
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Tel-nummer</label>
    <input type="text" class="form-control" name="tel" aria-describedby="emailHelp" placeholder="   Tel-nummer">
    <small name="emailHelp" class="form-text text-muted">test</small>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>



<style>

.kenzo{
    height: 56px;
    margin-top: 16px;
    line-height: 40px;
}
</style>