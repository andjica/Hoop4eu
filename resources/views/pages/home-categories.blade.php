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

                    U bent ingelogd
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
    <a href="{{route('home-create-category')}}" class="lead"><i class="fas fa-plus-circle fa-2x text-info"></i>Voeg een Brance toe</a> &nbsp; &nbsp;
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
    @endif
    <h2>Snelle zoekopdracht voor uw branche</h2>
    <p>Type hier uw zoekopdracht</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Branche </th>
                    <th scope="col">Foto</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Aanpassen</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                @foreach($categories as $cat)
                <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->name}}</td>
                    <td><img src="{{asset('/img-categories/'.$cat->img)}}" alt="{{$cat->name}}" width="55px"></td>
                    <td><a href="{{asset('/delete-category/'.$cat->id)}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                    <td><a href="{{asset('/edit-category/'.$cat->id)}}"><i class="fas fa-edit"></i></a></td>
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
