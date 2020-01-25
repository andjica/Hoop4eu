@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-3">
    <div class="col-lg-3 bg-dark p-3">
        @include('components.admin.sidebar')
    </div>
    <div class="col-lg-7 bg-white border p-3">
    <a href="{{route('home-create-city')}}" class="lead"><i class="fas fa-plus-circle fa-2x text-info"></i>Voeg een nieuwe Stad toe</a> &nbsp; &nbsp;
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
    @endif
    <h2>Filter naar uw gewenste stad</h2>
    <p>Zoek hier uw stad....</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Stad naam</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Pas stad aan</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                @foreach($cities as $city)
                <tr>
                    <th scope="row">{{$city->id}}</th>
                    <td>{{$city->name}}</td>
                    <td><a href="{{asset('/delete-city/'.$city->id)}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                    <td><a href="{{asset('/edit-city/'.$city->id)}}"><i class="fas fa-edit"></i></a></td>
                    </tr>
              
                @endforeach  
                 
                </tbody>
                </table>
                    <div>
                </div>
                
                
                    </div>
                </div>
                </div>

@endsection
