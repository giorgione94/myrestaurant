@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-light text-center mb-0">Ristoranti</h1>
                    <h2 class="text-light text-center mb-3 mt-1">
                        Scopri i nostri 4 ristoranti a Roma, siamo nei quartieri più belli della città:
                        Parioli, Trastevere, Prati, Cassia
                    </h2>
                </div>
            </div>
            <div class="card-group">
                @foreach ($restaurants as $restaurant)
                    <div class="card bg-dark text-white">
                        <img src="{{ $restaurant->image }}" class="card-img-thumbnail" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $restaurant->name }}</h3>
                            <h5 class="card-text">{{ $restaurant->address }}</h5>
                            <button type="submit" class="btn btn-primary">Discover</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
