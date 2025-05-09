@extends('layouts.app')

@section('title', 'À Propos')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="mb-4">À Propos de Renault Concession</h1>
                <p class="lead">Votre concessionnaire Renault de confiance depuis plus de 30 ans.</p>
            </div>
        </div>
        <div class="container my-5">
        <div class="row g-4 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <h2 class="text-primary">Notre Mission</h2>
                <p class="lead mb-4">Chez Renault Concession, notre mission est de fournir à nos clients des véhicules de qualité et un service exceptionnel. Nous nous engageons à :</p>
                <div  class="d-flex mb-3">
                <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                    <p>Offrir une gamme complète de véhicules Renault neufs et d'occasion</p>
                </div>
                <div  class="d-flex mb-3">
                <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                 <p> Fournir un service après-vente de qualité</p>
                  </div>
                  <div  class="d-flex mb-3">
                  <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                 <p> Proposer des solutions de financement adaptées à chaque client </p>
                    </div>
                <div  class="d-flex mb-3">
                <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                    <p>Garantir une expérience client exceptionnelle à chaque visite</p>
                </div>
            
                <p>Notre objectif est de créer des relations durables avec nos clients, basées sur la confiance et la satisfaction.</p>
            </div>
            <div class="col-md-6">
                <img src="https://drivein.ma//CDN/articles/338111-5-Renault_Kardian_Int%C3%A9rieur_Bon.jpg" alt="Notre showroom" class="img-fluid rounded">
            </div>
        </div>
        </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750" alt="Notre équipe" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="text-primary"> Notre Histoire</h2>
                <p>Fondée en 1990, Renault Concession a commencé comme un petit garage familial avec une passion pour les automobiles Renault. Au fil des années, nous avons grandi pour devenir l'un des concessionnaires Renault les plus respectés de la région.</p>
                <p>Notre histoire est marquée par :</p>
                <ul>
                    <li>1990 : Ouverture de notre premier garage</li>
                    <li>1995 : Expansion et ouverture d'un showroom dédié</li>
                    <li>2005 : Inauguration de notre centre de service après-vente moderne</li>
                    <li>2015 : Rénovation complète de nos installations pour offrir une meilleure expérience client</li>
                    <li>2020 : Célébration de notre 30e anniversaire et lancement de notre service en ligne</li>
                </ul>
                <p>Aujourd'hui, nous continuons à évoluer et à nous adapter aux besoins changeants de nos clients, tout en restant fidèles à nos valeurs fondamentales de qualité et de service.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center text-primary mb-4" >Notre Équipe</h2>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card text-center">
                            <img src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750" class="card-img-top" alt="Directeur">
                            <div class="card-body">
                                <h5 class="card-title">Jean Dupont</h5>
                                <p class="card-text">Directeur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card text-center">
                            <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750" class="card-img-top" alt="Responsable des ventes">
                            <div class="card-body">
                                <h5 class="card-title">Marie Martin</h5>
                                <p class="card-text">Responsable des ventes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card text-center">
                            <img src="https://images.pexels.com/photos/8961251/pexels-photo-8961251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750" class="card-img-top" alt="Chef mécanicien">
                            <div class="card-body">
                                <h5 class="card-title">Pierre Leroy</h5>
                                <p class="card-text">Chef mécanicien</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card text-center">
                            <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750" class="card-img-top" alt="Conseiller commercial">
                            <div class="card-body">
                                <h5 class="card-title">Sophie Bernard</h5>
                                <p class="card-text">Conseillère commerciale</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="mb-4 text-primary">Nos Valeurs</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-success">Qualité</h3>
                                <p class="card-text">Nous nous engageons à offrir des produits et services de la plus haute qualité. Chaque véhicule que nous vendons répond aux normes les plus strictes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-success">Intégrité</h3>
                                <p class="card-text">Nous menons nos affaires avec honnêteté et transparence. Nous croyons en la construction de relations de confiance avec nos clients et partenaires.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-success">Innovation</h3>
                                <p class="card-text">Nous embrassons les nouvelles technologies et méthodes pour améliorer constamment notre service et rester à la pointe de l'industrie automobile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
