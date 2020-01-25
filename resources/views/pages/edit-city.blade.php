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
    <div class="col-lg-3 bg-dark p-3">
        @include('components.admin.sidebar')
    </div>
    <div class="col-lg-7 bg-white border p-3">
    <a href="{{route('home-cities')}}" class="lead"><i class="fas fa-arrow-left text-infofa-2x"></i>Pas Stad aan</a> &nbsp; &nbsp;

            <form action="{{asset('/update-city/'.$city->id)}}" method="POST">
            <h3 class="lead mt-3 text-muted">Update Stad</h3>
            @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
            <div class="form-group">
                <label for="examplecity">Stad naam</label>
                <input type="text" class="form-control" id="city" name="city" aria-describedby="city" value="{{$city->name}}">
                <small id="emailHelp" class="form-text text-muted">Voeg een stad toe</small>
                <input type="hidden" value="{{$city->id}}" name="city-id">
            </div>
            <button type="submit" class="btn btn-primary">Stad bewerken</button>
            </form>
                    <div>
                </div>
                
                
                    </div>
                </div>
        </div>

@endsection
