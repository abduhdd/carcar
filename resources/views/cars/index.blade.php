@extends('layouts.app')

@section('title', 'Nos Voitures')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Nos Modèles Renault</h1>
        <p class="lead mb-5">Découvrez notre gamme complète de véhicules Renault. Des citadines aux SUV, en passant par les véhicules électriques, trouvez le modèle qui correspond à vos besoins.</p>
        
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-4 mb-4">
                    <div class="card car-card h-100">
                        <img src="{{ $car['image'] }}" class="card-img-top" alt="{{ $car['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car['name'] }}</h5>
                            <p class="card-text">{{ Str::limit($car['description'], 100) }}</p>
                            <p class="fw-bold">À partir de {{ $car['price'] }}</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="{{ route('cars.show', $car['id']) }}" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
