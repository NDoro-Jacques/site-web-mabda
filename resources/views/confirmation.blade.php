@extends('layouts.app')
@section('titre', 'Demande confirmée')

@section('content')

<section class="form-section py-5" style="min-height:70vh;display:flex;align-items:center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="form-card text-center p-5">

                    {{-- Icône succès --}}
                    <div class="confirmation-icon">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>

                    <h2 class="fw-800 mb-2" style="color:var(--secondary);">Demande envoyée !</h2>
                    <p class="text-muted mb-4">
                        Votre demande d'achat partenaire a bien été soumise à la mutuelle <strong>MABDA</strong>.
                        Vous recevrez une confirmation par email dans les <strong>48h ouvrables</strong>.
                    </p>

                    {{-- Étapes --}}
                    <div class="text-start mb-4 p-4 rounded-3" style="background:var(--light-bg);">
                        <h6 class="fw-700 mb-3 text-primary-mabda"><i class="bi bi-list-check me-2"></i>Prochaines étapes</h6>
                        <div class="d-flex align-items-start gap-3 mb-2">
                            <span class="badge rounded-circle d-flex align-items-center justify-content-center fw-700"
                                  style="background:var(--primary);color:#fff;width:24px;height:24px;min-width:24px;font-size:.75rem;">1</span>
                            <small class="text-muted">Vérification de votre dossier par le service MABDA</small>
                        </div>
                        <div class="d-flex align-items-start gap-3 mb-2">
                            <span class="badge rounded-circle d-flex align-items-center justify-content-center fw-700"
                                  style="background:var(--primary);color:#fff;width:24px;height:24px;min-width:24px;font-size:.75rem;">2</span>
                            <small class="text-muted">Notification de validation par email ou téléphone</small>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge rounded-circle d-flex align-items-center justify-content-center fw-700"
                                  style="background:var(--primary);color:#fff;width:24px;height:24px;min-width:24px;font-size:.75rem;">3</span>
                            <small class="text-muted">Présentation de votre bon de réduction chez le partenaire</small>
                        </div>
                    </div>

                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('home') }}" class="btn btn-primary-mabda">
                            <i class="bi bi-house-fill me-2"></i>Retour à l'accueil
                        </a>
                        <a href="{{ route('partenaires') }}" class="btn btn-outline-mabda">
                            <i class="bi bi-shop me-2"></i>Voir les partenaires
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
