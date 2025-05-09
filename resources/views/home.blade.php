@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Bannière principale -->
    <div class="hero-banner" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://static.vecteezy.com/system/resources/previews/020/499/899/non_2x/renault-symbol-brand-car-logo-black-design-french-automobile-illustration-with-yellow-background-free-vector.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold">Bienvenue chez Renault Concession</h1>
                    <p class="lead">Découvrez notre gamme de véhicules Renault et trouvez la voiture de vos rêves.</p>
                    <a href="{{ route('cars.index') }}" class="btn btn-warning btn-lg">Voir nos voitures</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Présentation de l'entreprise -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Votre concessionnaire Renault de confiance</h2>
                <p class="lead">Depuis plus de 30 ans, nous sommes à votre service pour vous offrir les meilleurs véhicules Renault.</p>
                <p>Chez Renault Concession, nous nous engageons à vous fournir un service de qualité et un accompagnement personnalisé dans le choix de votre véhicule. Notre équipe de professionnels est à votre disposition pour répondre à toutes vos questions et vous guider dans votre achat.</p>
                <a href="{{ route('about') }}" class="btn btn-outline-dark">En savoir plus</a>
            </div>
            <div class="col-md-6">
                <img src="https://static.lematin.ma/files/lematin/images/articles/2023/04/ccfac74e8ebb7337edb207d7197529cd.jpg" alt="Notre showroom" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <!-- Modèles phares -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Nos modèles phares</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card car-card h-100">
                    <img src="https://static.lematin.ma/files/lematin/images/articles/2023/04/ccfac74e8ebb7337edb207d7197529cd.jpg" class="card-img-top" alt="Renault Clio">
                    <div class="card-body">
                        <h5 class="card-title">Renault Clio</h5>
                        <p class="card-text">La citadine polyvalente par excellence.</p>
                        <p class="fw-bold">À partir de 15 990 €</p>
                        <a href="{{ route('cars.show', 1) }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card car-card h-100">
                    <img src="https://cdn-datak.motork.net/configurator-imgs/cars/fr/original/RENAULT/MEGANE-E-TECH-ELECTRIC/40813_BERLINE-A-HAYON-5-PORTES/renault-megane-front-view.jpg" class="card-img-top" alt="Renault Megane E-Tech">
                    <div class="card-body">
                        <h5 class="card-title">Renault Megane E-Tech</h5>
                        <p class="card-text">L'électrique réinventée.</p>
                        <p class="fw-bold">À partir de 35 200 €</p>
                        <a href="{{ route('cars.show', 3) }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card car-card h-100">
                    <img src="https://autodesignmagazine.com/wp-content/uploads/2022/04/2022050603_RenaultAustral.jpg" class="card-img-top" alt="Renault Austral">
                    <div class="card-body">
                        <h5 class="card-title">Renault Austral</h5>
                        <p class="card-text">Le SUV familial hybride.</p>
                        <p class="fw-bold">À partir de 33 400 €</p>
                        <a href="{{ route('cars.show', 4) }}" class="btn btn-primary">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('cars.index') }}" class="btn btn-lg btn-warning">Voir tous nos modèles</a>
        </div>
    </div>

    <!-- Services -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Nos services</h2>
        <div class="row">
            <div class="col-md-3 mb-4 text-center">
                <div class="p-3">
                    <i class="bi bi-car-front fs-1 text-warning"></i>
                    <h4 class="mt-3">Vente de véhicules neufs</h4>
                    <p>Découvrez notre gamme complète de véhicules Renault neufs.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 text-center">
                <div class="p-3">
                    <i class="bi bi-tools fs-1 text-warning"></i>
                    <h4 class="mt-3">Service après-vente</h4>
                    <p>Notre équipe de techniciens qualifiés prend soin de votre véhicule.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 text-center">
                <div class="p-3">
                    <i class="bi bi-cash-coin fs-1 text-warning"></i>
                    <h4 class="mt-3">Financement</h4>
                    <p>Solutions de financement adaptées à vos besoins.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 text-center">
                <div class="p-3">
                    <i class="bi bi-car-front-fill fs-1 text-warning"></i>
                    <h4 class="mt-3">Véhicules d'occasion</h4>
                    <p>Large choix de véhicules d'occasion certifiés.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
