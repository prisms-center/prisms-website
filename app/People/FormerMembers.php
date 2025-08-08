<?php

namespace App\People;

use Illuminate\Support\Collection;

class FormerMembers
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'Dr.',
                'first_name' => 'Mohammadreza',
                'last_name' => 'Yaghoobi',
                'email' => 'yaghoobi@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/reza_yaghoobi.jpg',
                'blurb' => 'My primary research interest is in multiscale computational plasticity and damage mechanics of crystalline materials, composites, and ceramics with emphasis on the theoretical modeling, numerical simulation of material behavior, and experimental correlation. Research activities of particular interest includes modelling at different length scales including atomistic simulation, crystal plasticity finite element method, and local and nonlocal continuum plasticity. Central to my research is serving as a lead developer of PRISMS-Plasticity software, which is an open-source parallel 3-D crystal plasticity and continuum plasticity finite element code.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Stephen',
                'last_name' => 'DeWitt',
                'email' => 'stvdwtt@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/steve.jpg',
                'blurb' => 'My research interests are in developing continuum simulation tools for material systems with complex geometries and then applying them to link microstructural features to macroscopic material properties. As a part of PRISMS I am investigating the formation and evolution of precipitates in magnesium alloys using phase-field simulations and the motion of dislocations past arrays of precipitates using dislocation dynamics simulations.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Phani',
                'last_name' => 'Motamarri',
                'email' => 'phanim@umich.edu',
                'research' => 'http://www-personal.umich.edu/~phanim/resume.pdf',
                'advisor' => '',
                'image' => 'assets/img/people/Phani_Motamarri.jpg',
                'blurb' => 'Phani Motamarri is a research faculty in Mechanical Engineering and one of the principal developers of the DFT-FE code. His research focuses on developing mathematical techniques and high-performance computational algorithms for exa-scale density functional theory (DFT) calculations using finite-elements and apply these techniques for ab-initio modeling of defect properties in structural and functional materials. His research is strongly multidisciplinary, drawing ideas from applied mathematics, data science, quantum-mechanics, solid-mechanics, materials science and scientific computing. As a part of PRISMS, dislocation properties of Magnesium and its binary alloys will be studied using real space Kohn-Sham DFT framework (DFT-FE).',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'John',
                'last_name' => 'C Thomas',
                'email' => 'johnct@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Anton Van der Ven',
                'image' => 'assets/img/people/thomas.jpg',
                'blurb' => 'My research utilizes predictive simulation to study and optimize finite-temperature properties of crystalline materials. I develop methods that leverage first-principles datasets to build atomistic and mesoscale models describing chemical, mechanical, and lattice-dynamical phenomena. My interests span new and yet-to-be-discovered materials for structural applications, thermoelectricity, optoelectronic devices, and energy storage.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Anirudh Raju',
                'last_name' => 'Natarajan ',
                'email' => 'ranirudh@umich.edu@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Anton Van der Ven',
                'image' => 'assets/img/people/Anirudh.jpg',
                'blurb' => 'My research involves understanding precipitation and kinetics in Magnesium alloys using a combination of first-principles methods and techniques from statistical mechanics. I am also involved in the development of computational tools that will help provide a link between the atomistic and continuum scale.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Yung Suk "Jeremy"',
                'last_name' => 'Yoo',
                'email' => 'yooy@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Amit Misra',
                'image' => 'assets/img/people/Yung_Suk_Yoo.jpg',
                'blurb' => 'My current research employs a multiscale electron microscopy-based approach to study dislocation interaction with grain boundaries in Mg alloys under tension. Mesoscale characterization with SEM and EBSD provides a wealth of information about slip activity and stress/strain localization. These data are coupled with STEM and TEM characterization of dislocation structures in the slip bands and near grain boundaries to help PRISMS-Plasticity code account for microstructural effects on stress localization.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Shiva',
                'last_name' => 'Rudraraju',
                'email' => 'rudraa@umich.edu',
                'research' => 'http://www-personal.umich.edu/~rudraa/',
                'advisor' => '',
                'image' => 'assets/img/people/rudraa.jpg',
                'blurb' => 'My current research involves analytical and computational modeling of coupled multiscale* phenomena in material physics and biology, spanning mechanics, transport, thermodynamics and phase transitions. Specifically, I am investigating chemo-mechanical coupling of phase transformations involved in battery materials.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Larry',
                'last_name' => 'Aagesen',
                'email' => 'laagesen@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/LarryAagesen.jpg',
                'blurb' => 'My research interests are in the use of theoretical and computational techniques to study the evolution of microstructures and nanostructures during phase transformations, coarsening, and crystal growth, and how evolution by these processes affects material properties. Within the PRISMS Center, I am applying the phase-field method to investigate the formation of precipitates in magnesium alloys, and how interfacial energy, elastic misfit energy, and growth kinetics interact to affect microstructure.',
            ],
        ]);
    }
}
