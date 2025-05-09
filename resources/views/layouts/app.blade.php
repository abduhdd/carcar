<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Renault Concession</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Styles personnalisés -->
    <style>
         body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zM22.343 0L13.8 8.544 15.214 9.96l9.9-9.96h-2.77zM32 0l-9.9 9.9 1.415 1.415L34.828 0H32zM0 0c0 3.373 2.73 6.103 6.103 6.103S12.207 3.373 12.207 0H0zm0 55.367c0-3.373 2.73-6.103 6.103-6.103s6.104 2.73 6.104 6.103H0zm60 0c0-3.373-2.73-6.103-6.103-6.103-3.374 0-6.104 2.73-6.104 6.103H60zm0-55.367c0 3.373-2.73 6.103-6.103 6.103-3.374 0-6.104-2.73-6.104-6.103H60z' fill='%239C92AC' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: -1;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        .card, .footer {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }
          
        .footer {
            background: linear-gradient(to right,rgb(214, 176, 37), #343a40) !important;
        }

        .footer a {
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #FFCC33 !important;
        }

        .social-links a {
            transition: transform 0.3s ease;
            display: inline-block;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .list-unstyled li {
            transition: all 0.3s ease;
        }

        .list-unstyled li:hover {
            transform: translateX(5px);
        }

        .navbar-brand img {
            height: 40px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            background-color: rgba(0,0,0,0.05);
        }

        .nav-link.active {
            color: #FFCC33 !important;
            font-weight: 600;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                padding: 1rem 0;
            }
            
            .nav-link {
                padding: 0.75rem 1rem !important;
                margin: 0.2rem 0;
            }
        }

        .navbar-brand img {
        
            height: 40px;
        }
        .hero-banner {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            overflow: hidden;
        }
        .hero-banner::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.2) 100%);
            z-index: 1;
        }
        .hero-banner > * {
            position: relative;
            z-index: 2;
        }
        
        .car-card {
            transition: transform 0.3s;
            height: 100%;
        }
        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Renault_2009_logo.svg" alt="Renault Logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                             <i class="bi bi-house-door me-1"></i>Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('cars.*') ? 'active' : '' }}" href="{{ route('cars.index') }}">
                        <i class="bi bi-car-front me-1"></i>Nos Voitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="bi bi-info-circle me-1"></i>À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <i class="bi bi-envelope me-1"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main style="padding-top: 76px;">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="footer mt-auto py-5 bg-dark text-light">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4 mb-3">
                    <div class="pe-lg-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Renault_2009_logo.svg" 
                             alt="Renault Logo" 
                             class="mb-3" 
                             style="height: 40px;) invert(1);">
                        <p class="text-muted mb-2">Votre concessionnaire Renault de confiance à Kénitra. Découvrez notre gamme complète de véhicules et services.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/renaultkenitra/?locale=fr_FR" class="text-light me-3"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="https://www.instagram.com/renaultkenitra/" class="text-light me-3"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="https://ma.linkedin.com/company/gharb-maamora-auto" class="text-light me-3"><i class="bi bi-linkedin fs-5"></i></a>
                          
                        </div>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="col-lg-4 mb-3">
                    <h5 class="text-warning mb-3">Horaires d'ouverture</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <span>Lundi - Vendredi</span>
                            <span class="text-muted">08:30–12:30, 14:30–18:30</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Samedi</span>
                            <span class="text-muted">09:00–13:00</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Dimanche</span>
                            <span class="text-muted">Fermé</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 mb-3">
                    <h5 class="text-warning mb-3">Contactez-nous</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <i class="bi bi-geo-alt text-warning me-2"></i>
                            <span>28 Avenue Moulay Abdelaziz,<br>Kénitra – Quartier Maamora</span>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-telephone text-warning me-2"></i>
                            <a href="tel:+21253730750" class="text-light text-decoration-none">+212 5373-07501</a>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-envelope text-warning me-2"></i>
                            <a href="mailto:marketing.renault@gmail.com" class="text-light text-decoration-none">cmarketing.renault@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="row mt-4 pt-4 border-top border-secondary">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted">&copy; {{ date('Y') }} Renault Concession. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none">Mentions légales</a></li>
                        <li class="list-inline-item mx-3">·</li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
