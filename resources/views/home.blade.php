@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://www.wallpaperflare.com/static/272/436/897/rolls-sushi-fish-meat-wallpaper.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://www.wallpaperflare.com/static/272/436/897/rolls-sushi-fish-meat-wallpaper.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.wallpaperflare.com/static/272/436/897/rolls-sushi-fish-meat-wallpaper.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
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
    <section class="d-block pt-3 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-light text-center mb-0">
                        Chopstick World
                    </h1>
                    <h2 class="text-light text-center mb-3 mt-1">
                        Scopri il nostro mondo, visita la gallery e vivi la magia
                        della nostra cucina in una atmosfera davvero unica
                    </h2>
                    <div class="card-group">
                        @foreach ($restaurants as $restaurant)
                            <div class="card bg-dark text-white">
                                <img src="{{ $restaurant->image }}" class="card-img-thumbnail" alt="...">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
