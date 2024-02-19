@extends('layout.app')

@section('home-content')

    <main>
        <div class="jumbotron">
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="{{ asset($comic['thumb'])}}" alt="">
                    </div>
                    <div class="col-md-8 py-3">
                        <h1 class="text-uppercase text-blue">{{ $comic['title'] }}</h1>
                        <div class="d-flex justify-content-between green-banner">
                            <div class="d-flex">
                                <div class="fw-bold pe-1">U.S. Price:</div>
                                <div class="fw-bold text-white">  {{ $comic['price'] }}</div>
                            </div>
                            <div class="fw-bold">AVAILABLE</div>
                        </div>
                        <div class="py-3">{{ $comic['description'] }}</div>
    
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection