@extends('layouts.app')
@section('titre', 'Nos Partenaires')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="page-header">
    <div class="container text-center">
        <h1 class="fw-800 mb-2">Nos Partenaires</h1>
        <p class="opacity-90 mb-0">Profitez de réductions exclusives chez nos partenaires agréés</p>
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,.7);">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Partenaires</li>
            </ol>
        </nav>
    </div>
</section>

{{-- ===== INFO BANNER ===== --}}
<section class="py-4" style="background:var(--primary-light);">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap text-center">
            <i class="bi bi-info-circle-fill text-primary-mabda fs-4"></i>
            <p class="mb-0 fw-600" style="color:var(--secondary);">
                Pour bénéficier des réductions, présentez votre carte d'adhérent ou
                <a href="{{ route('formulaire') }}" class="text-primary-mabda fw-700">soumettez une demande en ligne</a>.
            </p>
        </div>
    </div>
</section>

{{-- ===== PARTENAIRES GRID ===== --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Partenaires <span>agréés</span></h2>
            <div class="section-divider"></div>
            <p class="text-muted mt-3 mx-auto" style="max-width:520px;">
                MABDA a négocié des réductions exclusives avec ces partenaires de confiance pour vous offrir le meilleur.
            </p>
        </div>

        <div class="row g-4">
            @foreach($partenaires as $partenaire)
            <div class="col-sm-6 col-lg-3">
                <div class="partner-card text-center">
                    <div class="partner-icon mx-auto">
                        <i class="bi {{ $partenaire['icon'] }}"></i>
                    </div>
                    <h5 class="fw-700 mb-1">{{ $partenaire['nom'] }}</h5>
                    <p class="text-muted small mb-3">{{ $partenaire['categorie'] }}</p>
                    <span class="badge-reduction">
                        <i class="bi bi-percent me-1"></i>{{ $partenaire['reduction'] }} de réduction
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section class="cta-section py-5 text-white text-center">
    <div class="container">
        <h2 class="fw-800 mb-3">Prêt à profiter de vos réductions ?</h2>
        <p class="mb-4 opacity-90">Remplissez le formulaire de demande d'achat partenaire dès maintenant.</p>
        <a href="{{ route('formulaire') }}" class="btn px-5 py-3 fw-700 rounded-pill"
           style="background:#fff;color:var(--primary);font-size:1.05rem;">
            <i class="bi bi-file-earmark-text-fill me-2"></i>Faire une demande
        </a>
    </div>
</section>

@endsection
