@extends('layouts.app')
@section('titre', 'Nos Activités')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="page-header">
    <div class="container text-center">
        <h1 class="fw-800 mb-2">Nos Activités</h1>
        <p class="opacity-90 mb-0">Découvrez tous les services que MABDA met à votre disposition</p>
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,.7);">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Activités</li>
            </ol>
        </nav>
    </div>
</section>

{{-- ===== ACTIVITÉS GRID ===== --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Ce que nous <span>proposons</span></h2>
            <div class="section-divider"></div>
            <p class="text-muted mt-3 mx-auto" style="max-width:560px;">
                MABDA vous accompagne dans tous les aspects de votre vie à travers des activités
                concrètes et solidaires adaptées à chaque adhérent.
            </p>
        </div>

        <div class="row g-4">
            @foreach($activites as $activite)
            <div class="col-md-6 col-lg-4">
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="bi {{ $activite['icon'] }}"></i>
                    </div>
                    <h5 class="fw-700 mb-2">{{ $activite['titre'] }}</h5>
                    <p class="text-muted small mb-0">{{ $activite['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section class="cta-section py-5 text-white text-center">
    <div class="container">
        <h2 class="fw-800 mb-3">Bénéficiez de nos avantages partenaires</h2>
        <p class="mb-4 opacity-90">Faites une demande d'achat chez l'un de nos partenaires agréés avec réduction.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('partenaires') }}" class="btn px-4 py-2 fw-700 rounded-pill"
               style="background:rgba(255,255,255,.2);color:#fff;border:2px solid rgba(255,255,255,.5);">
                <i class="bi bi-shop me-2"></i>Voir les partenaires
            </a>
            <a href="{{ route('formulaire') }}" class="btn px-4 py-2 fw-700 rounded-pill"
               style="background:#fff;color:var(--primary);">
                <i class="bi bi-file-earmark-text-fill me-2"></i>Faire une demande
            </a>
        </div>
    </div>
</section>

@endsection
