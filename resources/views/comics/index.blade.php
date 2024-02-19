@extends('layout.app')

@section('home-content')
    <main>
        <div class="top-main">
            <div class="jumbotron">
                <div class="container">
                    <h2>current series</h2>
                </div>
            </div>
            <div class="comics">
                <div class="container">
                    <div class="comics-container py-5">
                        @foreach ($comics as $comic)
                            <div class="comics-card">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                    @if($comic->thumb == null)
                                        <img class="img-fluid" src="{{ Vite::asset('resources/img/placeholder_comic.png') }}" alt="">
                                    @else
                                        <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                                    @endif
                                    <h3>{{ $comic['series'] }}</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="text-center py-4">
                    <button class="btn btn-primary btn-lg text-uppercase">load more</button>
                </div>
                <div class="text-center py-4 ps-2">
                    <a href="{{ route('comics.create')}}" class="btn btn-success btn-lg text-uppercase">add a comic</a>
                </div>
            </div>
        </div>
        <div class="bottom-main">
            <div class="container">
                <ul>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""><a href="#">digital comics</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""><a href="#">dc merchandise</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""><a href="#">subscriptions</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""><a href="#">comic shop locator</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""><a href="#">dc power visa</a></li>
                </ul>
            </div>
        </div>
    </main>


    @endsection