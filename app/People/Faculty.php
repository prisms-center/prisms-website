<?php

namespace App\People;

use Illuminate\Support\Collection;

class Faculty
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'Professor ',
                'first_name' => 'Amit',
                'last_name' => 'Misra',
                'email' => 'amitmis@umich.edu',
                'research' => 'http://www.mse.engin.umich.edu/people/amitmis',
                'blurb' => 'My research focuses on deformation mechanisms in metallic alloys and composites, transmission electron microscopy and in situ nanomechanics',
                'advisor' => '',
                'image' => 'assets/img/people/amit.jpg',
            ],
            [
                'title' => 'Professor ',
                'first_name' => 'Elizabeth',
                'last_name' => 'Holm',
                'email' => 'eaholm@umich.edu',
                'research' => 'https://mse.engin.umich.edu/people/eaholm',
                'blurb' => 'My research areas include the theory and modeling of microstructural evolution in complex polycrystals, the physical and mechanical response of microstructures, mechanical properties of carbon nanotube networks, atomic-scale properties of internal interfaces, machine vision for automated microstructural classification, and machine learning to predict rare events.',
                'advisor' => '',
                'image' => 'assets/img/people/liz_holm3.png',
            ],
            [
                'title' => 'Professor ',
                'first_name' => 'Vikram',
                'last_name' => 'Gavini',
                'email' => 'vikramg@umich.edu',
                'research' => 'http://www-personal.umich.edu/~vikramg/index.html',
                'blurb' => 'Developing computational and mathematical tools for electronic structure calculations at macroscopic scales, multi-scale modeling, analysis of approximation theories, electronic structure studies on defects in solids.',
                'advisor' => '',
                'image' => 'assets/img/people/vikramg.jpg',
            ],
            [
                'title' => 'Professor ',
                'first_name' => 'Katsuyo',
                'last_name' => 'Thornton',
                'email' => 'kthorn@umich.edu',
                'research' => 'http://www.mse.engin.umich.edu/people/faculty/thornton',
                'advisor' => '',
                'blurb' => 'My research focuses on computational and theoretical investigations of the evolution of microstructures and nanostructures during processing and operation. These investigations facilitate the understanding of the underlying physics of materials to aid us in designing advanced materials with desirable properties and in developing manufacturing processes that are the most cost-effective.',
                'image' => 'assets/img/people/Katsuyo_Thornton.jpg',
            ],
            [
                'title' => 'Professor',
                'first_name' => 'Anton',
                'last_name' => 'Van der Ven',
                'email' => 'avdv@umich.edu',
                'research' => 'http://www.mse.engin.umich.edu/people/faculty/vanderven',
                'advisor' => '',
                'image' => 'assets/img/people/Anton_Van der Ven.jpg',
                'blurb' => ' I am interested in understanding and predicting equilibrium and non-equilibrium materials properties from first-principles. I combine electronic structure methods (density functional theory) with techniques from statistical mechanics to calculate thermodynamic and kinetic properties of new materials.',
            ],
            [
                'title' => 'Professor ',
                'first_name' => 'Veera',
                'last_name' => 'Sundararaghavan',
                'email' => 'veeras@umich.edu',
                'research' => 'http://umich.edu/~veeras/',
                'advisor' => '',
                'image' => 'assets/img/people/veera2.jpg',
                'blurb' => 'Prof. Sundararaghavan develops multi-scale computational methods for polycrystalline alloys, fiber reinforced composites, metallic foams and ultra-high temperature ceramics to model the effect of microstructure on the overall deformation, fatigue, failure, thermal transport and oxidation response.',
            ],
            [
                'title' => 'Assistant Professor ',
                'first_name' => 'Ashely',
                'last_name' => 'Bucsek',
                'email' => 'abucsek@umich.edu',
                'blurb' => 'My research focuses on developing and leveraging multimodal in-situ 3D X-ray microscopy techniques to study the relationships between microstructure, micromechanics, and macroscopic behavior during thermomechanical processing and loading. ',
                'advisor' => '',
                'image' => 'assets/img/people/Ashley_Bucsek.png',
                'research' => '',
            ],
            [
                'title' => 'Assistant Professor ',
                'first_name' => 'Liang',
                'last_name' => 'Qi',
                'email' => 'qiliang@umich.edu',
                'blurb' => 'My research fields are investigations of the mechanical and chemical properties of materials by applying theoretical and computational tools, including first-principles calculations, atomistic simulations, multiscale modeling, and machine learning. My current research focuses on the understanding of the intrinsic electronic and atomistic mechanisms for the mechanical deformation, phase transformation, and degradation of advanced alloys to enhance their mechanical performances and chemical stabilities.',
                'advisor' => '',
                'image' => 'assets/img/people/Liang_Qi.png',
                'research' => '',
            ],
        ]);
    }
}
