





<div class="col-lg-12" style="    display: flex;">

    <div class="col-lg-4" style="    display: grid;   height: 220px; ">
    <h4>Handige links</h4>
        <a href="{{ route('erp') }}" class="btn btn-primary kenzo">Overzicht Pagina</a>
        <a href="{{ route('home-admin') }}" class="btn btn-primary kenzo">Dashboard</a>
        <a href="./" class="btn btn-primary kenzo">Terug naar Hoop4EU</a>
    

    </div>
    <div class="col-lg-8">
    <form>


<div class="form-group">
    <label for="exampleInputEmail1">Voornaam</label>
    <input type="text" class="form-control" id="Voornaam" aria-describedby="emailHelp" placeholder="Voornaam">
    <small id="emailHelp" class="form-text text-muted">test</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Achternaam</label>
    <input type="text" class="form-control" id="Achternaam" aria-describedby="emailHelp" placeholder="Achternaam">
    <small id="emailHelp" class="form-text text-muted">test</small>
  </div>
  
  <div class="form-group">
      <input type="date" class="form-control" id="start" name="trip-start"
       value="2018-07-22"
       min="1940-01-01" max="2018-12-31">
  </div>
 
  
  <div class="form-group">
    <label for="exampleInputEmail1">BSN-Nummer</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BSN-Nummer">
    <small id="emailHelp" class="form-text text-muted">test</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Functie </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Functie">
    <small id="emailHelp" class="form-text text-muted">test</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">test</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Tel-nummer</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="   Tel-nummer">
    <small id="emailHelp" class="form-text text-muted">test</small>
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