@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container my-5">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="display-4 mb-4">Contactez-nous</h1>
                <p class="lead text-muted">Une question ? Un projet ? N'hésitez pas à nous contacter, notre équipe est là pour vous accompagner.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Envoyez-nous un message</h2>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom complet</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Votre message</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-send me-2"></i>Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4">Nos coordonnées</h2>
                        
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-geo-alt text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Notre concession</h5>
                                <p class="mb-0">28 Avenue Moulay Abdelaziz<br>Kénitra – Quartier Maamora<br>Maroc</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-telephone text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Téléphone</h5>
                                <p class="mb-0"><a href="tel:+21253730750" class="text-decoration-none">+212 5373-07501</a></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-envelope text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0"><a href="mailto:marketing.renault@gmail.com" class="text-decoration-none">contact@renault-concession.fr</a></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="bi bi-clock text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-3">Horaires d'ouverture</h5>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr><td>Lundi - Vendredi</td><td>08:30–12:30, 14:30–18:30</td></tr>
                                        <tr><td>Samedi</td><td>09:00–13:00</td></tr>
                                        <tr><td>Dimanche</td><td>Fermé</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="card-title h3 mb-4 text-center">Notre localisation</h2>
                        <div class="ratio ratio-21x9">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.4318347996455!2d-6.5878358!3d34.2505765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda759f9847310c7%3A0xb89d3a7b44498c06!2sRenault%20Kenitra!5e0!3m2!1sfr!2sma!4v1683556123456!5m2!1sfr!2sma"
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .card {
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .input-group-text {
            background-color: transparent;
        }
        .bi {
            opacity: 0.7;
        }
    </style>
    @endpush
@endsection
