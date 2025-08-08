<?php

namespace App\Presentations;

use Illuminate\Support\Collection;

class InvitedPresentations
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'ICME: Past, Present and Future',
                'authors' => 'John Allison',
                'details' => 'Invited Plenary, ICME World Congress, TMS, Colorado Springs, CO, June 2015.',
            ],
            [
                'title' => 'PRISMS, A Software Innovation Center for the Structural Metals Community',
                'authors' => 'John Allison',
                'details' => 'Invited Lecture, ICME World Congress, TMS, Colorado Springs, CO, June 2015.',
            ],
            [
                'title' => 'Integrated Computational Engineering for Titanium Products',
                'authors' => 'John Allison',
                'details' => 'Invited Keynote, International Titanium Congress, San Diego, CA, August 2015.',
            ],
            [
                'title' => 'PRISMS Center: A Software Innovation Center for the Structural Metals Community',
                'authors' => 'John Allison',
                'details' => 'Invited Talk, TMS Annual Meeting, Nashville, TN, March 2016.',
            ],
            [
                'title' => 'PRISMS Center: Integrated Software Tools and A Framework for the Global Structural Metals Community',
                'authors' => 'John Allison',
                'details' => 'Invited Talk, ICME Integration Workshop, ICMEg, Barcelona, Spain, April 2016.',
            ],
            [
                'title' => 'APT analysis of the microstructure of Mg-Nd alloys',
                'authors' => 'Vicente Aruallo-Peters & Emmanuelle Marquis',
                'details' => 'Gordon Conference on Physical Metallurgy (2015).',
            ],
            [
                'title' => 'PRISMS-PF: An Open Source Finite Element Phase Field Code',
                'authors' => 'S. DeWitt, S. Rudraraju, K. Thornton, and J. Allison',
                'details' => 'Center for Hierarchical Materials Design Phase Field Methods Workshop III, Evanston, IL, May 4, 2016.',
            ],
            [
                'title' => 'An Update on the Progress of PRISMS-PF',
                'authors' => 'S. Rudraraju, S. DeWitt, K. Thornton, and J. Allison',
                'details' => 'Center for Hierarchical Materials Design Phase Field Methods Workshop II, Evanston, IL, October 15, 2015.',
            ],
            [
                'title' => 'Peridynamics and Finite Element Approaches for Crystal Plasticity: Numerical Comparisons and Experimental Validation',
                'authors' => 'V. Sundararaghavan',
                'details' => 'Numerical Comparisons and Experimental Validation, Structural TIM 2015, Falls Church, VA, June 24-26 2015.',
            ],
            [
                'title' => 'Defects in Phase-Field Crystal Models: Comparison to Molecular Dynamics',
                'authors' => 'D. Montiel, J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                'details' => 'TMS 145th Annual Meeting 2016, Nashville, TN, February 14-18, 2016.',
            ],
            [
                'title' => 'Experiments and Simulations of Recrystallization in Plastically Deformed Titanium',
                'authors' => 'K. Thornton',
                'details' => 'International Conference on Plasticity 2016, Kona, HI, January 3-8, 2016. (Keynote)'
            ],
            [
                'title' => 'Unconditionally Stable Second-Order Time Integration Algorithms for Coupled Mechano-Chemistry',
                'authors' => 'Koki Sagiyama, Krishna Garikipati, Shiva Rudraraju',
                'details' => 'invited talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            ],
            [
                'title' => 'Microstructure Change and Interface Motion As Problems of Evolving Material Configurations',
                'authors' => 'Gregory Teichert, Krishna Garikipati',
                'details' => 'invited keynote talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            ],
            [
                'title' => 'A Massively Parallel Terascale Matrix-Free Computational Framework for Phase Field Modeling',
                'authors' => 'Shiva Rudraraju',
                'details' => 'invited talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            ],
            [
                'title' => 'Large-scale real-space electronic structure calculations',
                'authors' => 'Vikram Gavini, Phani Motamarri',
                'details' => 'invited talk at 145th annual TMS meeting Nashville, 2016.'
            ],
            [
                'title' => 'Large-scale real-space electronic structure calculations and studies on dislocations in Aluminum',
                'authors' => 'Vikram Gavini, Sambit Das, Mrinal Iyer',
                'details' => 'Key Note Talk at European Congress on Computational Methods in Applied Sciences and Engineering, Crete, Greece 2016.'
            ],
            [
                'title' => 'High temperature statistical mechanics to enable alloys design.',
                'authors' => 'Anton Van der Ven',
                'details' => 'Invited talk at The Minerals, Metals and Materials Society (TMS) Annual Meeting, Nashville Tennessee, February 15, 2016.'
            ],
            [
                'title' => '“Statistical Mechanics to enable design of high temperature alloys and ceramics”',
                'authors' => 'Anton Van der Ven',
                'details' => 'Invited talk at Workshop on High Performance Materials, GE Power, Bangalore, India, February 24, 2016.'
            ],
            [
                'title' => 'Microscale Deformation Mapping and Large Data Analysis',
                'authors' => 'Zhe Chen and Sam Daly',
                'details' => 'University of New England, Biddeford, ME, July 2015.'
            ],
            [
                'title' => 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                'authors' => 'B. Puchala, G. Tarcea, S. Tamma, M. Hedstrom, H. V. Jagadish, E. A. Marquis, J. Allison',
                'details' => 'Opportunities in Materials Informatics Workshop, Madison, WI, February, 10, 2015.'
            ],
            [
                'title' => 'Connecting phenomenological descriptions of microstructure evolution to the electronic structure of alloys',
                'authors' => 'B. Puchala, J. Zhu, A. Belak, J. C. Thomas, A. Van der Ven',
                'details' => 'ICME Summer School, Ann Arbor, MI, June 19, 2015.'
            ],
            [
                'title' => 'CASM: A clusters approach to Statistical Mechanics',
                'authors' => 'B. Puchala, J. C. Thomas, A. Van der Ven',
                'details' => 'ICME Summer School, Ann Arbor, MI, June 23, 2015.'
            ],
            [
                'title' => 'Automating the characterization of materials thermodynamics and kinetics using ab initio based cluster expansion Hamiltonian methods with CASM',
                'authors' => 'B. Puchala, J. C. Thomas, A. Van der Ven',
                'details' => '13th US National Congress on Computational Mechanics, San Diego, CA., July 27, 2015.'
            ],
            [
                'title' => 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                'authors' => 'B. Puchala, G. Tarcea, S. Tamma, M. Hedstrom, H. V. Jagadish, E. A. Marquis, J. Allison',
                'details' => 'CHiMaD Buiding an Interoperable Materials Data Infrastructure Workshop, Evanston, IL, May, 2, 2016.'
            ],
        ]);
    }
}
