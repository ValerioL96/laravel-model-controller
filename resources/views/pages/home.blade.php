@extends('layouts.app')

@section('page-title','Laravel Model Controller')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Movie list
            </h1>
        </div>
        @foreach ($movies as $movie )
        <article class="col-3 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$movie->id}} : {{$movie->title}}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Titolo originale: {{$movie->original_title}}
                    </h6>
                    <p class="card-text">
                        Nazionalità: {{$movie->nationality}}
                    </p>
                    <p class="card-text">
                        Data di uscita: {{$movie->date}}
                    </p>
                    <p class="card-text">
                        Voto: {{$movie->vote}}
                    </p>
                </div>
            </div>
        </article>
        @endforeach

    </div>
</section>
@endsection
