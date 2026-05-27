@extends('layouts.app')
@section('titre', 'Accueil')

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero-section">
    <div class="container position-relative" style="z-index:1;">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 text-white">
                <span class="badge rounded-pill px-3 py-2 mb-3"
                      style="background:rgba(255,255,255,.2);font-size:.85rem;letter-spacing:1px;">
                    <i class="bi bi-shield-check me-1"></i> Solidarité · Bien-être · Protection
                </span>
                <h1 class="mb-4">
                    Bienvenue à la<br>
                    Mutuelle <span style="color:#ffe4db;">MABDA</span>
                </h1>
                <p class="mb-4">
                    Votre mutuelle d'entreprise dédiée à votre bien-être et à celui de votre famille.
                    Ensemble, nous construisons un avenir plus sûr et plus solidaire.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('activites') }}" class="btn btn-primary-mabda"
                       style="background:#fff;color:var(--primary);border-color:#fff;">
                        <i class="bi bi-grid-fill me-2"></i>Nos Activités
                    </a>
                    <a href="{{ route('formulaire') }}" class="btn"
                       style="border:2px solid #fff;color:#fff;border-radius:50px;padding:.65rem 1.8rem;font-weight:600;">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Faire une demande
                    </a>
                </div>
            </div>

            <div class="col-lg-6 d-flex justify-content-center">
                <div style="position:relative;">
                    <div style="width:320px;height:320px;background:rgba(255,255,255,.12);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <div style="width:240px;height:240px;background:rgba(255,255,255,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                            <div style="text-align:center;color:#fff;">
                                <i class="bi bi-shield-heart-fill" style="font-size:5rem;"></i>
                                <div style="font-size:1.1rem;font-weight:700;margin-top:.5rem;">Votre protection<br>au quotidien</div>
                            </div>
                        </div>
                    </div>
                    {{-- Floating badges --}}
                    <div style="position:absolute;top:10px;right:-20px;background:#fff;border-radius:12px;padding:.6rem 1rem;box-shadow:0 4px 20px rgba(0,0,0,.15);">
                        <div style="color:var(--primary);font-weight:800;font-size:1.2rem;">1200+</div>
                        <div style="font-size:.75rem;color:#666;">Adhérents</div>
                    </div>
                    <div style="position:absolute;bottom:20px;left:-20px;background:#fff;border-radius:12px;padding:.6rem 1rem;box-shadow:0 4px 20px rgba(0,0,0,.15);">
                        <div style="color:var(--primary);font-weight:800;font-size:1.2rem;">8+</div>
                        <div style="font-size:.75rem;color:#666;">Partenaires</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== STATS ===== --}}
<section class="py-5" style="background:var(--light-bg);">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-number">1200+</div>
                    <div class="fw-600 text-muted">Adhérents actifs</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-number">15</div>
                    <div class="fw-600 text-muted">Années d'existence</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-number">8+</div>
                    <div class="fw-600 text-muted">Partenaires agréés</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-number">98%</div>
                    <div class="fw-600 text-muted">Taux de satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== APERÇU ACTIVITÉS ===== --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Nos <span>Activités</span></h2>
            <div class="section-divider"></div>
            <p class="text-muted mt-3 mx-auto" style="max-width:520px;">
                MABDA vous accompagne à chaque étape de votre vie avec des services adaptés à vos besoins.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="activity-card">
                    <div class="activity-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                    <h5 class="fw-700">Santé & Prévoyance</h5>
                    <p class="text-muted small">Prise en charge des frais médicaux, hospitalisation et consultations spécialisées.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card">
                    <div class="activity-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <h5 class="fw-700">Bourses Scolaires</h5>
                    <p class="text-muted small">Soutien financier aux enfants des adhérents pour les études à tous niveaux.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card">
                    <div class="activity-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                    <h5 class="fw-700">Épargne & Crédit</h5>
                    <p class="text-muted small">Plans d'épargne solidaire et micro-crédits pour financer vos projets.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('activites') }}" class="btn btn-primary-mabda">
                <i class="bi bi-arrow-right-circle me-2"></i>Voir toutes les activités
            </a>
        </div>
    </div>
</section>

{{-- ===== POURQUOI NOUS ? ===== --}}
<section class="py-5" style="background:var(--light-bg);">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <h2 class="section-title mb-3">Pourquoi choisir <span>MABDA</span> ?</h2>
                <div class="section-divider" style="margin:0 0 1.5rem;"></div>
                <p class="text-muted">
                    Depuis plus de 15 ans, MABDA s'engage à offrir à ses membres un service de qualité,
                    transparent et solidaire. Nous plaçons l'humain au cœur de chaque décision.
                </p>
                <a href="{{ route('formulaire') }}" class="btn btn-primary-mabda mt-3">
                    <i class="bi bi-file-earmark-text me-2"></i>Faire une demande
                </a>
            </div>
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-3">
                    <div class="why-item d-flex align-items-start gap-3">
                        <div class="why-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <h6 class="fw-700 mb-1">Protection complète</h6>
                            <p class="text-muted small mb-0">Une couverture santé, sociale et financière pour vous et votre famille.</p>
                        </div>
                    </div>
                    <div class="why-item d-flex align-items-start gap-3">
                        <div class="why-icon flex-shrink-0"><i class="bi bi-people-fill"></i></div>
                        <div>
                            <h6 class="fw-700 mb-1">Solidarité & Communauté</h6>
                            <p class="text-muted small mb-0">Une mutuelle gérée par et pour ses membres, avec transparence totale.</p>
                        </div>
                    </div>
                    <div class="why-item d-flex align-items-start gap-3">
                        <div class="why-icon flex-shrink-0"><i class="bi bi-percent"></i></div>
                        <div>
                            <h6 class="fw-700 mb-1">Réductions exclusives</h6>
                            <p class="text-muted small mb-0">Bénéficiez de tarifs préférentiels chez nos partenaires agréés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section class="cta-section py-5 text-white text-center">
    <div class="container">
        <h2 class="fw-800 mb-3">Prêt à bénéficier de vos avantages ?</h2>
        <p class="mb-4 opacity-90">Remplissez votre demande d'achat partenaire en quelques minutes.</p>
        <a href="{{ route('formulaire') }}" class="btn px-5 py-3 fw-700 rounded-pill"
           style="background:#fff;color:var(--primary);font-size:1.05rem;">
            <i class="bi bi-file-earmark-text-fill me-2"></i>Faire une demande maintenant
        </a>
    </div>
</section>

@endsection
