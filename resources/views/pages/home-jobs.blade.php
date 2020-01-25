
@include('components.header')
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
    <div class="col-lg-2 bg-dark p-3">
        @include('components.admin.sidebar')
    </div>
    <div class="col-lg-10 bg-white border p-3">
    <a href="{{route('home-admin')}}" class="lead"><i class="fas fa-plus-circle fa-2x text-info"></i>Voeg nieuwe Vacature toe</a> &nbsp; &nbsp;
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
    @endif
    <h2>Filter hier uw vacatures</h2>
    <p>Type something for searching you Jobs</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Vacature naam</th>
                    <th scope="col">Branche naam</th>
                    <th scope="col">Stad naam</th>
                    <th scope="col">Geplaatst op</th>
                    <th scope="col">Zie meer</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                @foreach($jobs as $job)
                <tr>
                    <th scope="row">{{$job->id}}</th>
                    <td>{{$job->name}}</td>
                    <td>{{$job->category->name}}</td>
                    <td>{{$job->city->name}}</td>
                    <td>{{$job->created_at}}</td>
                    <td><a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary">Zie meer</a></td>
                    <td><a href="{{asset('/delete-job/'.$job->id)}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                    <td><a href="{{asset('/edit-job/'.$job->id)}}"><i class="fas fa-edit"></i></a>
                    </td>
                    </tr>
              
                @endforeach  
                 
                </tbody>
                
                </table>
                {{$jobs->links()}}
                    <div>
                </div>
                
                
                    </div>
                </div>
                </div>

@endsection
