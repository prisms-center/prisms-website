<?php

namespace App\People;

use Illuminate\Support\Collection;

class Staff
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => 'Dr. ',
                'first_name' => 'David',
                'last_name' => 'Montiel',
                'email' => 'dmontiel@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/david_montiel.png',
                'blurb' => 'My research is focused on the development and application of phase-field and phase-field-crystal models to simulate the dynamics of nano- and microstructures during materials processing and operation. The goal of this work is to better understand the underlying mechanisms that give rise to different microstructures, and then apply this knowledge to design materials with targeted properties. Specific topics of my research include precipitate nucleation and growth, the study three-dimensional effects in two-dimensional materials, and the effect of microstructure on corrosion behavior.',
            ],
            [
                'title' => 'Dr. ',
                'first_name' => 'Chaitali',
                'last_name' => 'Patil',
                'email' => 'chaitalp@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/Chaitali_Patil.jpeg',
                'blurb' => '',
            ],
            [
                'title' => 'Dr.',
                'first_name' => 'Brian',
                'last_name' => 'Puchala',
                'email' => ' bpuchala@umich.edu',
                'research' => '',
                'advisor' => '',
                'image' => 'assets/img/people/brian.jpg',
                'blurb' => 'My research is focused on computational materials modeling of the thermodynamics and kinetics of solid-state atomistic processes through the development of new automated computational tools. In particular, I am developing Monte Carlo methods which I use for fundamental studies of phase transitions and precipitate formation in metal alloys.',
            ],
            [
                'title' => 'Senior Developer',
                'first_name' => 'Glenn',
                'last_name' => 'Tarcea',
                'email' => 'gtarcea@umich.edu',
                'research' => '',
                'advisor' => '',
                'blurb' => 'Glenn has been involved with computers since 1988 when he discovered Turbo Pascal. He has worked on projects ranging from student account systems to distributed storage and backup systems. In 2009 Glenn completed his MBA at the University of Michigan\'s Ross School of Business. ',
                'image' => 'assets/img/people/glenn_tarcea.jpg',
            ],
        ]);
    }
}
