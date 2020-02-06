
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
                <th scope="col">Foto</th>
                </tr>
            </thead>


            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Danny </td>
                <td>Milosevic</td>
                <td>13-08-1997</td>
                <td>227670140</td>
                <td>developer</td>
                <td>danny@gmail.com</td>
                <td>0618574485</td>
                <td><img src="./img/logo4.png" style="max-height:80px; max-width:80px;"></td>
                </tr>
            </tbody>
        </table>
                    
    </div>
  </div>

<style>

.spacing{
    margin-top:60px;
}


</style>