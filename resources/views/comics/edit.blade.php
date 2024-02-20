@extends('layout.app')

@section('home-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Modifica info fumetto</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <form action="{{ route('comics.update', $comic->id)}}" method="POST" class="form-control my-4">
                @csrf
                @method('PUT')
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" required
                placeholder="Inserisci il titolo" value="{{ $comic->title }}">

                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci l'immagine" value="{{ $comic->thumb }}">

                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ $comic->price }}">

                <label for="series">Serie</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie" value="{{ $comic->series }}">

                <label for="sale_date">Data di uscita</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data" value="{{ $comic->sale_date }}">

                <label for="type">Tipo</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci il tipo" value="{{ $comic->type }}">

                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Inserisci la descrizione">{{ $comic->description }}</textarea>

                <button type="submit" class="btn btn-primary my-2">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection