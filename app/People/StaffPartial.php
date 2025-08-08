<?php

namespace App\People;

use Illuminate\Support\Collection;

class StaffPartial
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'Dr.',
                'first_name' => 'Sambit',
                'last_name' => 'Das',
                'email' => 'dsambit@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Vikram Gavini',
                'image' => 'assets/img/people/SambitDas.jpg',
                'blurb' => 'My research focuses on computational method development for large scale real-space density functional theory (DFT) calculations using finite-elements, and applying them to understand the connection between fundamental dislocation core properties and macroscopic mechanical properties in crystalline materials. My current research focuses on electronic-structure studies of dislocation core energetics and dislocation-solute interactions to enhance the ductility of dilute Mg alloys. I am also one of the principal developers of the open-source DFT-FE code for conducting accurate and large-scale Kohn-Sham DFT calculations.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Qianying',
                'last_name' => 'Shi',
                'email' => 'shiqiany@umich.edu',
                'research' => '',
                'advisor' => 'Dr. John Allison',
                'image' => 'assets/img/people/qianying_shi.jpg',
                'blurb' => 'My research focuses on microstructural characterization and property evaluation of metallic materials, especially precipitation strengthened lightweight alloys, for the development of integrated computational materials engineering approach to predict and optimize the alloy performance. I conduct quantitative nano-scaled microstructural analysis using advanced characterization tools such as transmission electron microscopy, high resolution scanning transmission electron microscopy and atomic probe tomography. Experimental results are coupled with CALPHAD simulation to achieve thermodynamic and kinetic modeling for microstructure evolution during different processing steps and furthermore to build the strength prediction model.',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Tracy',
                'last_name' => 'Berman',
                'email' => 'tradiasa@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => '',
                'blurb' => '',
            ],
        ]);
    }
}
