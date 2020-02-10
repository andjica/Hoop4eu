
        <!-- End of Topbar -->          
        
        
        
        <div class="container-fluid spacing">
            <div class="row">
                 <a href="{{ route('erp') }}" class="btn btn-primary" style=" position: absolute;  left: 36%" >  Overzicht kandidaten</a> 
                <a href="{{ route('toevoegen') }}" class="btn btn-secondary" style=" position: absolute;  left:48%" >  Kandidaten toevoegen</a> 
            </div>
        </container>


        <div class="container-fluid spacing">

          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">
          @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
         
            <h2>Zoek hier snel uw kandidaat</h2>
            <p></p>  
            <input class="form-control" id="myInput" type="text" placeholder="Type hier uw zoekopdracht..">
          <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Geboorte-Datum</th>
                <th scope="col">BSN-Nummer</th>
                <th scope="col">Functie</th>
                <th scope="col">E-mail</th>
                <th scope="col">Tel-nummer</th>
                <th scope="col">Verwijder</th>
                </tr>
            </thead>


            <tbody id="myTable">
            @foreach($people as $p)
                <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->first_name}} </td>
                <td>{{$p->last_name}}</td>
                <td>{{$p->born_date}}</td>
                <td>{{$p->bsn_number}}</td>
                <td>{{$p->functie}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->tel_number}}</td>
                <td><a href="{{asset('/delete-people/'.$p->id)}}"><i class="fas fa-trash-alt text-danger"></i><a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
                    
    </div>
  </div>

<style>

.spacing{
    margin-top:60px;
}


</style>