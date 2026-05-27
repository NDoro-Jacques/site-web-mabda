<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutuelleController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function activites()
    {
        $activites = [
            [
                'icon'        => 'bi-heart-pulse-fill',
                'titre'       => 'Santé & Prévoyance',
                'description' => 'Prise en charge des frais médicaux, hospitalisation, consultations spécialisées et médicaments pour tous les adhérents et leurs ayants droit.',
            ],
            [
                'icon'        => 'bi-house-heart-fill',
                'titre'       => 'Aide au Logement',
                'description' => 'Prêts à taux préférentiels et subventions pour l\'acquisition, la rénovation ou la location d\'un logement décent.',
            ],
            [
                'icon'        => 'bi-mortarboard-fill',
                'titre'       => 'Bourses Scolaires',
                'description' => 'Soutien financier aux enfants des adhérents pour les études primaires, secondaires et supérieures.',
            ],
            [
                'icon'        => 'bi-people-fill',
                'titre'       => 'Action Sociale',
                'description' => 'Assistance aux membres en situation difficile : décès, accident, maternité, retraite et autres événements de vie.',
            ],
            [
                'icon'        => 'bi-piggy-bank-fill',
                'titre'       => 'Épargne & Crédit',
                'description' => 'Plans d\'épargne solidaire et micro-crédits pour financer vos projets personnels ou professionnels.',
            ],
            [
                'icon'        => 'bi-gift-fill',
                'titre'       => 'Avantages Partenaires',
                'description' => 'Réductions exclusives chez nos partenaires commerciaux : alimentation, électroménager, voyages, pharmacies et bien plus.',
            ],
        ];

        return view('activites', compact('activites'));
    }

    public function partenaires()
    {
        $partenaires = [
            ['nom' => 'PharmaCare',    'categorie' => 'Pharmacie',    'reduction' => '15%', 'icon' => 'bi-capsule'],
            ['nom' => 'TechStore',     'categorie' => 'Électronique', 'reduction' => '10%', 'icon' => 'bi-laptop'],
            ['nom' => 'FreshMarket',   'categorie' => 'Alimentation', 'reduction' => '8%',  'icon' => 'bi-basket'],
            ['nom' => 'OptiVision',    'categorie' => 'Optique',      'reduction' => '20%', 'icon' => 'bi-eye'],
            ['nom' => 'VoyagePlus',    'categorie' => 'Voyages',      'reduction' => '12%', 'icon' => 'bi-airplane'],
            ['nom' => 'ModeElégance',  'categorie' => 'Habillement',  'reduction' => '18%', 'icon' => 'bi-bag'],
            ['nom' => 'AutoService',   'categorie' => 'Automobile',   'reduction' => '10%', 'icon' => 'bi-car-front'],
            ['nom' => 'DentaSmile',    'categorie' => 'Dentisterie',  'reduction' => '25%', 'icon' => 'bi-emoji-smile'],
        ];

        return view('partenaires', compact('partenaires'));
    }

    public function formulaire()
    {
        $partenaires = [
            'PharmaCare'   => 'PharmaCare – Pharmacie',
            'TechStore'    => 'TechStore – Électronique',
            'FreshMarket'  => 'FreshMarket – Alimentation',
            'OptiVision'   => 'OptiVision – Optique',
            'VoyagePlus'   => 'VoyagePlus – Voyages',
            'ModeElégance' => 'ModeElégance – Habillement',
            'AutoService'  => 'AutoService – Automobile',
            'DentaSmile'   => 'DentaSmile – Dentisterie',
        ];

        return view('formulaire', compact('partenaires'));
    }

    public function soumettre(Request $request)
    {
        $request->validate([
            'nom'             => 'required|string|max:100',
            'prenom'          => 'required|string|max:100',
            'numero_adherent' => 'required|string|max:50',
            'email'           => 'required|email',
            'telephone'       => 'required|string|max:20',
            'partenaire'      => 'required|string',
            'type_achat'      => 'required|string',
            'montant'         => 'required|numeric|min:1',
            'date_souhaitee'  => 'required|date|after:today',
            'description'     => 'nullable|string|max:500',
        ]);

        // TODO : enregistrer en base de données ou envoyer un e-mail
        return redirect()->route('confirmation');
    }

    public function confirmation()
    {
        return view('confirmation');
    }
}
