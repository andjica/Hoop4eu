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
        @include('components.admin.create-job')
    <div>
</div>
  
 
    </div>
</div>
</div>

@endsection
