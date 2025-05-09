<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    // Tableau des voitures (remplace la base de données)
    private $cars = [
        [
            'id' => 1,
            'name' => 'Renault Clio',
            'price' => '166,000.000 MAD',
            'image' => 'https://static.lematin.ma/files/lematin/images/articles/2023/04/ccfac74e8ebb7337edb207d7197529cd.jpg',
            'description' => 'La Renault Clio est une citadine polyvalente, idéale pour la ville et les trajets quotidiens. Compacte et économique, elle offre un excellent rapport qualité-prix.',
            'specs' => [
                'Moteur' => '1.0 TCe 90ch',
                'Puissance' => '90 ch',
                'Consommation' => '5.2 L/100km',
                'Couleurs disponibles' => 'Rouge, Noir, Blanc, Bleu',
                'Boîte de vitesse' => 'Manuelle 6 vitesses'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Renault Captur',
            'price' => '227,000.000 MAD ',
            'image' => 'https://www.renaultcanada.com/gpc/_media/Image/20241210171012/renault-captur-2025-768x768.jpg',
            'description' => 'Le Renault Captur est un SUV compact qui combine style et praticité. Son habitacle modulable et ses technologies avancées en font un véhicule polyvalent pour tous vos besoins.',
            'specs' => [
                'Moteur' => '1.3 TCe 140ch',
                'Puissance' => '140 ch',
                'Consommation' => '6.0 L/100km',
                'Couleurs disponibles' => 'Orange, Gris, Blanc, Noir',
                'Boîte de vitesse' => 'Automatique EDC 7 rapports'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Renault Megane E-Tech',
            'price' => '372,000.000 MAD',
            'image' => 'https://cdn-datak.motork.net/configurator-imgs/cars/fr/original/RENAULT/MEGANE-E-TECH-ELECTRIC/40813_BERLINE-A-HAYON-5-PORTES/renault-megane-front-view.jpg',
            'description' => 'La Renault Megane E-Tech 100% électrique représente l\'avenir de la mobilité. Avec son autonomie impressionnante et sa technologie de pointe, elle redéfinit l\'expérience de conduite.',
            'specs' => [
                'Moteur' => 'Électrique 160 kW',
                'Puissance' => '220 ch',
                'Autonomie' => 'Jusqu\'à 470 km',
                'Couleurs disponibles' => 'Gris Rafale, Bleu Nocturne, Blanc Nacré',
                'Batterie' => '60 kWh'
            ]
        ],
        [
            'id' => 4,
            'name' => 'Renault Austral',
            'price' => '334,000.000 MAD',
            'image' => 'https://autodesignmagazine.com/wp-content/uploads/2022/04/2022050603_RenaultAustral.jpg',
            'description' => 'Le Renault Austral est un SUV familial alliant confort, espace et technologies innovantes. Son design élégant et ses performances hybrides en font un choix idéal pour les familles modernes.',
            'specs' => [
                'Moteur' => 'Hybrid 200ch',
                'Puissance' => '200 ch',
                'Consommation' => '4.6 L/100km',
                'Couleurs disponibles' => 'Blanc Glacier, Noir Étoilé, Gris Schiste',
                'Boîte de vitesse' => 'Automatique Multi-mode'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Renault Arkana',
            'price' => '303,000.000 MAD',
            'image' => 'https://static-images.lpnt.fr/cd-cw809/images/2021/06/10/21832837lpw-21832836-libre-jpg_8022363.jpg',
           'description' => 'Le Renault Arkana combine l\'élégance d\'un coupé avec la robustesse d\'un SUV. Son design distinctif et sa motorisation hybride offrent une expérience de conduite unique.',
            'specs' => [
                'Moteur' => 'E-Tech Hybrid 145ch',
                'Puissance' => '145 ch',
                'Consommation' => '4.9 L/100km',
                'Couleurs disponibles' => 'Rouge Flamme, Noir, Blanc, Gris Métallique',
                'Boîte de vitesse' => 'Automatique Multi-mode'
            ]
        ]
    ];

    public function index()
    {
        return view('cars.index', ['cars' => $this->cars]);
    }

    public function show($id)
    {
        $car = null;
        foreach ($this->cars as $c) {
            if ($c['id'] == $id) {
                $car = $c;
                break;
            }
        }
    
        if (!$car) {
            abort(404);
        }
    
        // Pass both the specific car and all cars to the view
        return view('cars.show', [
            'car' => $car,
            'cars' => $this->cars
        ]);
    }
}
