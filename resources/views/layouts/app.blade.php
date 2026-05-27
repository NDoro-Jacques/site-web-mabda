<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MABDA – Mutuelle d'entreprise au service de ses adhérents">
    <title>MABDA – @yield('titre', 'Mutuelle d\'entreprise')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    {{-- Custom CSS --}}
    <link href="{{ asset('css/mabda.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

{{-- ===== Navbar ===== --}}
<nav class="navbar navbar-expand-lg navbar-mabda sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <div style="width:38px;height:38px;background:#fff;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                <span style="color:var(--primary);font-weight:900;font-size:1rem;">M</span>
            </div>
            <span style="font-size:1.3rem;font-weight:900;letter-spacing:1px;">MABDA</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"
                aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto gap-lg-1 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-fill me-1"></i>Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('activites') ? 'active' : '' }}" href="{{ route('activites') }}">
                        <i class="bi bi-grid-fill me-1"></i>Activités
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('partenaires') ? 'active' : '' }}" href="{{ route('partenaires') }}">
                        <i class="bi bi-shop me-1"></i>Partenaires
                    </a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-outline-light rounded-pill px-4 fw-bold {{ request()->routeIs('formulaire*') ? 'active' : '' }}"
                       href="{{ route('formulaire') }}">
                        <i class="bi bi-file-earmark-text-fill me-1"></i>Faire une demande
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- ===== Contenu principal ===== --}}
<main>
    @yield('content')
</main>

{{-- ===== Footer ===== --}}
<footer class="footer-mabda pt-5 pb-0 mt-5">
    <div class="container">
        <div class="row g-4">
            {{-- Brand --}}
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand-name mb-2">MABDA</div>
                <p class="small" style="line-height:1.8;">
                    Mutuelle d'entreprise engagée pour le bien-être de ses adhérents.
                    Solidarité, transparence et excellence au service de chaque membre.
                </p>
                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="social-icon text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon text-white"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-icon text-white"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-icon text-white"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="col-lg-2 col-md-6">
                <h5 class="mb-3">Navigation</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="{{ route('home') }}"><i class="bi bi-chevron-right me-1" style="color:var(--primary)"></i>Accueil</a></li>
                    <li class="mb-2"><a href="{{ route('activites') }}"><i class="bi bi-chevron-right me-1" style="color:var(--primary)"></i>Activités</a></li>
                    <li class="mb-2"><a href="{{ route('partenaires') }}"><i class="bi bi-chevron-right me-1" style="color:var(--primary)"></i>Partenaires</a></li>
                    <li class="mb-2"><a href="{{ route('formulaire') }}"><i class="bi bi-chevron-right me-1" style="color:var(--primary)"></i>Faire une demande</a></li>
                </ul>
            </div>

            {{-- Activités --}}
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-3">Nos Activités</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><i class="bi bi-heart-pulse me-2" style="color:var(--primary)"></i>Santé & Prévoyance</li>
                    <li class="mb-2"><i class="bi bi-house-heart me-2" style="color:var(--primary)"></i>Aide au Logement</li>
                    <li class="mb-2"><i class="bi bi-mortarboard me-2" style="color:var(--primary)"></i>Bourses Scolaires</li>
                    <li class="mb-2"><i class="bi bi-piggy-bank me-2" style="color:var(--primary)"></i>Épargne & Crédit</li>
                    <li class="mb-2"><i class="bi bi-people me-2" style="color:var(--primary)"></i>Action Sociale</li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-3">Contact</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2" style="color:var(--primary)"></i>123, Rue de la Solidarité</li>
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2" style="color:var(--primary)"></i>+XXX XX XX XX XX</li>
                    <li class="mb-2"><i class="bi bi-envelope-fill me-2" style="color:var(--primary)"></i>contact@mabda.org</li>
                    <li class="mb-2"><i class="bi bi-clock-fill me-2" style="color:var(--primary)"></i>Lun–Ven : 8h – 17h</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom text-center py-3 mt-4 small">
            &copy; {{ date('Y') }} <span style="color:var(--primary);font-weight:700;">MABDA</span>
            – Tous droits réservés. Développé avec <i class="bi bi-heart-fill" style="color:var(--primary)"></i>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
