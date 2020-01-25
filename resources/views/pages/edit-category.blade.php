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
    <a href="{{route('home-categories')}}" class="lead"><i class="fas fa-arrow-left text-infofa-2x"></i>Pas uw Branche aan</a> &nbsp; &nbsp;

            <form action="{{asset('/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            <h3 class="lead mt-3 text-muted"> Update Branche </h3>

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
                <label for="examplecategory">Branche naam</label>
                <input type="text" class="form-control" id="category" name="category" aria-describedby="category" value="{{$category->name}}">
                <small id="cat" class="form-text text-muted">Voeg uw Branche toe</small>
            </div>
            <div class="form-group">
                <label for="examplecategory">Huidige foto</label><br>
                <img src="{{asset('/img-categories/'.$category->img)}}" alt="{{$category->name}}" width="55px">
                {{$category->img}}
                <input type="file" class="form-control" id="image" name="image" aria-describedby="img" value="{{$category->img}}">
                
            </div>
            <button type="submit" class="btn btn-primary">Update Branche</button>
            </form>
                    <div>
                </div>
                
                
                    </div>
                </div>
        </div>

@endsection
