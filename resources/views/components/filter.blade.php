<div class="col-lg-4 pt-3" id="div-search">
@if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="card bg-light">
            <form class="mt-3 mb-3 right p-2"  id="form-search" action="{{route('vacatures-two')}}" method="GET">
            <div class="form-group">
              
            <select class="js-example-basic-single form-control search-slt border-warning bg-light" name="cityfilter">
                            <option></option>
                                ...
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
            </select>

            </div>
            <div class="form-group">
                
            <select class="js-example-basic-single2 form-control search-slt border-warning bg-light" name="categoryfilter">
                            <option></option>
                                ...
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                </select>

            </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox mt-3 ml-1">
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="fulltime" checked>
                    <label class="custom-control-label" for="customCheck1"> <i class="fas fa-hourglass text-warning"></i>&nbsp;Full time</label>
            </div>
            </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox mt-3 ml-1">
            <input type="checkbox" class="custom-control-input" id="customCheck2"  name="parttime" checked>
                    <label class="custom-control-label" for="customCheck2"><i class="fas fa-hourglass-start text-warning"></i> &nbsp;Part time</label>
            </div>
            </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox mt-3 ml-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="thirdtime" checked>
                    <label class="custom-control-label" for="customCheck3"><i class="fas fa-history text-warning"></i> &nbsp;Tijdelijk</label>
                    </div>
            </div>
            <button type="submit" class="btn btn-info btn-lg wrn-btn mt-2 text-white">Zoek naar Vacatures</button>
            </form>
                </div>
            <div class="card mt-2 bg-light">
            <b class="text-info p-3">Hoop 4 EU B.V.</b>
            
            <hr>
                <div class="card-body ">
                
                <i class="fas fa-phone text-warning"></i> Telefoon: 0180 – 531191<br><br>
                <i class="fas fa-map-marker-alt text-warning" style="margin-right: 10px;"></i>Deventerseweg 50, <p style="margin-left: 22px;"> 2994LD Barendrecht </p><br><br>
                
                <a href="https://www.facebook.com/Hoop4eu/"><i class="fab fa-facebook-square fa-2x text-primary"></i></a> &nbsp;  <a href="https://twitter.com/hoop4eu"><i class="fab fa-twitter-square fa-2x text-info"></i> </a> &nbsp; 
                <a href="https://www.linkedin.com/company/hoop-4-eu"><i class="fa fa-linkedin fa-2x text-primary"></i> </a><a href="https://www.youtube.com/channel/UCt84MgIuZcf0_va3atJCYjA"> &nbsp; <i class="fa fa-youtube-square fa-2x text-danger"></i></a>
                </div>
            
                </div>
                <div class="card mt-2 bg-light">
                <div class="card-body">
                
                <h4 class="font-italic">Over Ons</h4>
                    <p class="mb-0">Hoop 4 EU verzorgt uitzending en werving & selectie van vakkundig personeel 
                voor functies binnen Techniek, Bouw, Logistiek, Office en Onderwijs. Dankzij onze vernieuwende recruitment proces, zijn wij de beste partij voor het bemiddelen van vakkundig personeel </p>
                <a href="{{asset('/over-ons')}}">Bekijk Hoop4EU B.V</a>
                </div>
                </div>
            </div>