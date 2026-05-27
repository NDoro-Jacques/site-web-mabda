@extends('layouts.app')
@section('titre', 'Formulaire de demande')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<section class="page-header">
    <div class="container text-center">
        <h1 class="fw-800 mb-2">Demande d'achat partenaire</h1>
        <p class="opacity-90 mb-0">Remplissez le formulaire pour bénéficier de vos réductions</p>
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,.7);">Accueil</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Formulaire</li>
            </ol>
        </nav>
    </div>
</section>

{{-- ===== FORMULAIRE ===== --}}
<section class="form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Alertes de validation --}}
                @if($errors->any())
                <div class="alert alert-danger rounded-3 mb-4">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <strong>Veuillez corriger les erreurs suivantes :</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-card">
                    {{-- Header --}}
                    <div class="form-card-header">
                        <div class="d-flex align-items-center gap-3">
                            <div style="width:50px;height:50px;background:rgba(255,255,255,.2);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                                <i class="bi bi-file-earmark-text-fill fs-4"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fw-700">Formulaire de demande</h4>
                                <small class="opacity-75">Tous les champs marqués * sont obligatoires</small>
                            </div>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="p-4 p-md-5">
                        <form action="{{ route('formulaire.soumettre') }}" method="POST" novalidate>
                            @csrf

                            {{-- Informations personnelles --}}
                            <h6 class="fw-700 text-primary-mabda mb-3 pb-2 border-bottom">
                                <i class="bi bi-person-fill me-2"></i>Informations personnelles
                            </h6>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                           id="nom" name="nom" value="{{ old('nom') }}"
                                           placeholder="Ex: DUPONT" required>
                                    @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="prenom" class="form-label">Prénom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                                           id="prenom" name="prenom" value="{{ old('prenom') }}"
                                           placeholder="Ex: Jean" required>
                                    @error('prenom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="numero_adherent" class="form-label">Numéro adhérent <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('numero_adherent') is-invalid @enderror"
                                           id="numero_adherent" name="numero_adherent" value="{{ old('numero_adherent') }}"
                                           placeholder="Ex: MABDA-2024-001" required>
                                    @error('numero_adherent')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email" value="{{ old('email') }}"
                                           placeholder="Ex: jean.dupont@email.com" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="telephone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control @error('telephone') is-invalid @enderror"
                                           id="telephone" name="telephone" value="{{ old('telephone') }}"
                                           placeholder="Ex: +XXX XX XX XX XX" required>
                                    @error('telephone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Informations achat --}}
                            <h6 class="fw-700 text-primary-mabda mb-3 pb-2 border-bottom">
                                <i class="bi bi-cart-fill me-2"></i>Informations sur l'achat
                            </h6>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="partenaire" class="form-label">Partenaire concerné <span class="text-danger">*</span></label>
                                    <select class="form-select @error('partenaire') is-invalid @enderror"
                                            id="partenaire" name="partenaire" required>
                                        <option value="">-- Sélectionnez un partenaire --</option>
                                        @foreach($partenaires as $value => $label)
                                        <option value="{{ $value }}" {{ old('partenaire') == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('partenaire')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="type_achat" class="form-label">Type d'achat <span class="text-danger">*</span></label>
                                    <select class="form-select @error('type_achat') is-invalid @enderror"
                                            id="type_achat" name="type_achat" required>
                                        <option value="">-- Sélectionnez le type --</option>
                                        <option value="medicaments" {{ old('type_achat') == 'medicaments' ? 'selected' : '' }}>Médicaments</option>
                                        <option value="electronique" {{ old('type_achat') == 'electronique' ? 'selected' : '' }}>Électronique</option>
                                        <option value="alimentation" {{ old('type_achat') == 'alimentation' ? 'selected' : '' }}>Alimentation</option>
                                        <option value="optique" {{ old('type_achat') == 'optique' ? 'selected' : '' }}>Optique</option>
                                        <option value="voyage" {{ old('type_achat') == 'voyage' ? 'selected' : '' }}>Voyage</option>
                                        <option value="habillement" {{ old('type_achat') == 'habillement' ? 'selected' : '' }}>Habillement</option>
                                        <option value="automobile" {{ old('type_achat') == 'automobile' ? 'selected' : '' }}>Automobile</option>
                                        <option value="dentisterie" {{ old('type_achat') == 'dentisterie' ? 'selected' : '' }}>Soins dentaires</option>
                                        <option value="autre" {{ old('type_achat') == 'autre' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                    @error('type_achat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="montant" class="form-label">Montant estimé (FCFA) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('montant') is-invalid @enderror"
                                           id="montant" name="montant" value="{{ old('montant') }}"
                                           placeholder="Ex: 50000" min="1" required>
                                    @error('montant')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="date_souhaitee" class="form-label">Date souhaitée <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('date_souhaitee') is-invalid @enderror"
                                           id="date_souhaitee" name="date_souhaitee" value="{{ old('date_souhaitee') }}"
                                           min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                                    @error('date_souhaitee')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description / Commentaire</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                              id="description" name="description" rows="4"
                                              placeholder="Décrivez votre achat ou ajoutez des précisions utiles...">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">500 caractères maximum</div>
                                </div>
                            </div>

                            {{-- Note --}}
                            <div class="alert rounded-3 mb-4" style="background:var(--primary-light);border:1px solid rgba(240,80,35,.2);">
                                <i class="bi bi-info-circle-fill me-2 text-primary-mabda"></i>
                                <small style="color:var(--secondary);">
                                    Votre demande sera traitée dans un délai de <strong>48h ouvrables</strong>.
                                    Vous recevrez une confirmation par email.
                                </small>
                            </div>

                            {{-- Submit --}}
                            <div class="d-flex gap-3 flex-wrap">
                                <button type="submit" class="btn btn-primary-mabda flex-grow-1">
                                    <i class="bi bi-send-fill me-2"></i>Soumettre ma demande
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                    <i class="bi bi-arrow-left me-1"></i>Annuler
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
