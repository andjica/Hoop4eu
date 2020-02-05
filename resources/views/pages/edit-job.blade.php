@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
               
                <div class="card-body">
                @if (auth()->user())
                Hello {{ Auth::user()->name }},
                @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ Auth::user()->name }} {{ session('status') }}
                           
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
    <a href="{{route('home-jobs')}}" class="lead"><i class="fas fa-arrow-left text-infofa-2x"></i>Manage Vacatures</a> &nbsp; &nbsp;

<h3>Edit Vacature</h3>
    <form action="{{asset('/update-job/'.$job->id)}}" method="POST">
    <h3 class="lead mt-3 text-muted">Pas vacature aan</h3>
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
            <label for="title">Titel van vacature</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$job->name}}">
        </div>
        <div class="form-group">
            <label for="city">Huidige Stad</label>
            <select class="custom-select"  name="city">
            <option value="{{$job->city->id}}">{{$job->city->name}}</option>
            @foreach($cities as $city)
                <option  value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="city">Huidige Branche</label>
            <select class="custom-select"  name="category">
            <option value="{{$job->category->id}}">{{$job->category->name}}</option>
            @foreach($categories as $cat)
                <option  value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="desc1">Beschrijving 1</label>
            <textarea class="form-control" rows="4" id="desc1" name="desc1">{{$job->desc1}}</textarea>   
        </div>
        <div class="form-group">
            <label for="desc2">Beschrijving 2</label>
            <textarea class="form-control" rows="4" id="desc2" name="desc2">{{$job->desc2}}</textarea>   
        </div>
        <div class="form-group">
            <label for="desc3">Beschrijving 3</label>
            <textarea class="form-control" rows="4" id="des3" name="desc3">{{$job->desc3}}</textarea>   
        </div>
        <div class="form-group">
            <label for="desc3">Beschrijving  4</label>
            <textarea class="form-control" rows="4" id="des4" name="desc4">{{$job->desc4}}</textarea>   
        </div>
        <div class="form-group">
            <label for="desc3">Beschrijving  5</label>
            <textarea class="form-control" rows="4" id="des5" name="desc5">{{$job->desc5}}</textarea>   
        </div>
        <div class="form-group">
            <label for="desc3">Beschrijving  6</label>
            <textarea class="form-control" rows="4" id="des6" name="desc6">{{$job->desc6}}</textarea>   
        </div>
        <div class="form-group">
        <label for="title1">Title one</label>
        <input type="text" class="form-control" id="title1" name="title1" value="{{$titles->title1}}">
        </div>
        <div class="form-group">
        <label for="title2">Title two</label>
        <input type="text" class="form-control" id="title2" name="title2" value="{{$titles->title2}}">
        </div>
        <div class="form-group">
        <label for="title3">Title three</label>
        <input type="text" class="form-control" id="title3" name="title3" value="{{$titles->title3}}">
        </div>
        <div class="form-group">
        <label for="title4">Title four</label>
        <input type="text" class="form-control" id="title4" name="title4" value="{{$titles->title4}}">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" {{ $job->fulltime ? 'checked' : '' }} id="fulltime" name="fulltime"/>
            <label class="form-check-label" for="fulltime">
               Full time
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" {{ $job->parttime ? 'checked' : '' }} id="parttime" name="parttime">
            <label class="form-check-label" for="parttime">
               Part time
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" {{ $job->tijdelijk ? 'checked' : '' }} id="tijdelijk" name="tijdelijk">
            <label class="form-check-label" for="tijdelijk">
             Tijdelijk
            </label>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
    <div>
</div>
  
 
    </div>
</div>
</div>

@endsection
