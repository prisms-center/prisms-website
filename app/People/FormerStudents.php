<?php

namespace App\People;

use Illuminate\Support\Collection;

class FormerStudents
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => '',
                'first_name' => 'Jason',
                'last_name' => 'Luce ',
                'email' => 'jpluce@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Katsuyo Thornton',
                'image' => 'assets/img/people/jason_luce.png',
                'blurb' => 'My research within the PRISMS program focuses on the computational modeling of grain boundary energy and grain boundary dynamics in magnesium alloys. Specifically, I plan to apply the phase field crystal (PFC) model to calculate grain boundary energy as a function of grain misorientation for 2D hexagonal and 3D HCP structures. However, many aspects of the PFC model are still in development, and a large part of my research is centered on using the results of atomistic simulations (e.g., molecular dynamics) to parameterize the PFC model so that it describes physical systems more accurately. ',
            ],
            [
                'title' => '',
                'first_name' => 'Aaditya',
                'last_name' => 'Lakshmanan',
                'email' => 'aadityal@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Veera Sundararaghavan ',
                'image' => 'assets/img/people/aaditya_lakshmanan.png',
                'blurb' => 'I work on multiple approaches to capture microstructural length-scale effects in crystal plasticity constitutive models. This includes simple phenomenological Hall-Petch type models whose constitutive parameters are obtained by fitting experimental measurements of the stress profile ahead of a blocked slip band with a theoretical continuum dislocation pileup model. Recent efforts involve developing dislocation-density based models tied to the continuum crystal plasticity framework which naturally depict size-effect and other intragranular microstructural features. The applications of such an approach to Magnesium alloys is of paramount importance in the Aerospace industry and their science is yet to be uncovered.',
            ],
            [
                'title' => '',
                'first_name' => 'Mohsen Taheri',
                'last_name' => 'Andani',
                'email' => 'mtaheri@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Amit Misra',
                'image' => 'assets/img/people/mohsen_taherai_andani.jpg',
                'blurb' => 'I am studying the role of grain boundaries in yield strength of the Magnesium alloys. In the PRISMS program, this work serves to identify critical mechanisms and phenomena necessary for the development of computational models dealing with grain boundary strengthening, as well as validating results from computational models as they are developed.',
            ],
            [
                'title' => '',
                'first_name' => 'Ellen',
                'last_name' => 'Sitzmann',
                'email' => 'esitzmann@gmail.com',
                'research' => '',
                'advisor' => 'Dr. Emanuelle Marquis',
                'image' => 'assets/img/people/Ellen_Sitzmann.png',
                'blurb' => 'My thesis work focuses on quantifying the effects of alloying elements, aging time, and temperature on the precipitation mechanisms and kinetics in Mg-Rare Earth alloys, using techniques such as transmission electron microscopy and atom probe tomography. Within the collaborative framework of PRISMS, my research will further our understanding of precipitation processes and contribute to a complete thermodynamic and kinetic description of Mg alloys.',
            ],
            [
                'title' => '',
                'first_name' => 'Jacob',
                'last_name' => 'Adams',
                'email' => 'jfadams@umich.edu',
                'research' => '',
                'advisor' => 'Dr. John Allison & Dr. Wayne Jones',
                'image' => 'assets/img/people/jfadams.jpg',
                'blurb' => 'I am studying the very high cycle fatigue behavior and crack propagation mechanisms in magnesium. In the PRISMS program, this work serves to identify critical mechanisms and phenomena necessary for the development of computational models dealing with fatigue crack growth, as well as validating results from computational models as they are developed. ',
            ],
            [
                'title' => '',
                'first_name' => 'Sriram',
                'last_name' => 'Ganesan',
                'email' => 'sriramg@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Veera Sundararaghavan',
                'image' => 'assets/img/people/Sriram.jpg',
                'blurb' => 'I am involved in integrating Crystal Plasticity Finite Element Method (CPFEM) into the PRISMS framework. Crystal plasticity methods are used to simulate the response of aggregates of crystals to an applied stress. My current research is focused on developing improved constitutive models which can connect the physics of dislocations with the hardening rates used in CPFEM calculations. ',
            ],
            [
                'title' => '',
                'first_name' => 'Greg',
                'last_name' => 'Teichert',
                'email' => 'gregteichert@gmail.edu',
                'research' => '',
                'advisor' => '',
                'image' => '',
                'blurb' => '',
            ],
        ]);
    }
}
