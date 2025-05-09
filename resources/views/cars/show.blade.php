@extends('layouts.app')

@section('title', $car['name'])

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h1>{{ $car['name'] }}</h1>
                <p class="lead">{{ $car['description'] }}</p>
                <h3 class="text-warning">À partir de {{ $car['price'] }}</h3>
                <hr>
                <h4>Spécifications techniques</h4>
                <table class="table">
                    <tbody>
                        @foreach($car['specs'] as $key => $value)
                            <tr>
                                <th>{{ $key }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-warning me-2">Demander un essai</a>
                    <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Retour aux modèles</a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3>Caractéristiques</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Design</h5>
                                <p class="card-text">Un design moderne et élégant qui ne laisse personne indifférent. Des lignes fluides et des finitions soignées pour un style unique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Confort</h5>
                                <p class="card-text">Un intérieur spacieux et confortable, conçu pour vous offrir une expérience de conduite agréable. Des sièges ergonomiques et des matériaux de qualité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Technologie</h5>
                                <p class="card-text">Équipé des dernières technologies pour vous faciliter la vie. Système multimédia, aide à la conduite, connectivité smartphone et bien plus encore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3>Vous pourriez aussi aimer</h3>
                <hr>
                <div class="row">
                    @php
                        $relatedCars = array_filter($cars, function($c) use ($car) {
                            return $c['id'] != $car['id'];
                        });
                        $relatedCars = array_slice($relatedCars, 0, 3);
                    @endphp

                    @foreach($relatedCars as $relatedCar)
                        <div class="col-md-4 mb-4">
                            <div class="card car-card h-100">
                                <img src="{{ $relatedCar['image'] }}" class="card-img-top" alt="{{ $relatedCar['name'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $relatedCar['name'] }}</h5>
                                    <p class="fw-bold">À partir de {{ $relatedCar['price'] }}</p>
                                    <a href="{{ route('cars.show', $relatedCar['id']) }}" class="btn btn-primary">Voir les détails</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
