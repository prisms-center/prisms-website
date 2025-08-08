<?php

namespace App\Presentations;

use Illuminate\Support\Collection;

class ContributedPresentations
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                'authors' => 'B. Puchala, G. Tarcea, S. Tamma, E. A. Marquis, J. Allison',
                'details' => '3rd World Congress on Integrated Computational Materials Engineering, Colorado Spring, CO, June 3, 2015.',
            ],
            [
                'title' => 'Crystal plasticity modeling and validation of deformation response in Magnesium Alloys',
                'authors' => 'S. Ganesan, A. Githens, V. Sundararaghavan, J. Allison',
                'details' => '15th Pan-American Congress of Applied Mechanics-PACAM XV, 18-21 May, 2015, Champaign, USA.',
            ],
            [
                'title' => 'A Multi-Scale Comparison of Grain Boundary Structure Using the Phase-Field Crystal Model and Molecular Dynamics',
                'authors' => 'J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                'details' => 'TMS ICME 2015, Colorado Springs, CO, May 31 - June 4, 2015.',
            ],
            [
                'title' => 'The Structure of β” and β’ in an Aged Mg-Nd Alloy.',
                'authors' => 'Ellen Solomon, Emmanuelle Marquis,',
                'details' => 'TMS Annual Meeting (2016).',
            ],
            [
                'title' => 'Parameterization of the Structural Phase Field Crystal Model for the Simulation of Grain Boundary Structures and Energies',
                'authors' => 'J. Luce and K. Thornton',
                'details' => 'TMS 145th Annual Meeting 2016, Nashville, TN, February 14-18, 2016.',
            ],
            [
                'title' => 'Computational Modeling of Grain Boundaries Using the Phase Field Crystal Method',
                'authors' => 'J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                'details' => 'MICDE Annual Symposium, Ann Arbor, MI, April 7, 2016.',
            ],
            [
                'title' => 'A Three-Dimensional Field Formulation, and Isogeometric Solutions to Point and Line Defect Cores Using Toupin’s Theory of Gradient Elasticity at Finite Strains',
                'authors' => 'Zhenlin Wang, Shiva Rudraraju, Krishna Garikipati',
                'details' => '13th US National Congress on Computational Mechanics, July 26-30, San Diego.',
            ],
            [
                'title' => 'Large-scale real-space electronic structure calculations using adaptive finite element discretization',
                'authors' => 'Phani Motamarri, Vikram Gavini',
                'details' => '52nd Annual Technical Meeting of Society of Engineering Sciences, Texas A&M, 2015.',
            ],
            [
                'title' => 'Real-space finite-element formulation of orbital-free density functional theory for Al-Mg materials system',
                'authors' => 'Sambit Das, Vikram Gavini',
                'details' => '52nd Annual Technical Meeting of Society of Engineering Sciences, Texas A&M, 2015.',
            ],
            [
                'title' => 'Short Crack Growth and Very High Cycle Fatigue Behavior of Magnesium Alloy WE43',
                'authors' => 'Jacob Adams',
                'details' => 'TMS Annual Meeting, Nashville TN, March 2016.',
            ],
            [
                'title' => 'Aeriel Murphy',
                'authors' => 'The Effect of Aluminum Content on Recrystallization and Grain-Growth of Magnesium',
                'details' => 'Poster Presentation, TMS Annual Meeting, Nashville TN, March 2016.',
            ],
        ]);
    }
}
