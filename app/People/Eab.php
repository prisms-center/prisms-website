<?php

namespace App\People;

use Illuminate\Support\Collection;

class Eab
{
    public static function all(): Collection
    {
        return collect([
            [
                'lastname' => 'Arsenli',
                'display' => 'Dr. Tom Arsenlis, Lawrence Livermore National Laboratory',
            ],
            [
                'lastname' => 'Li',
                'display' => 'Dr. Mei Li, Ford Motor Co.',
            ],
            [
                'lastname' => 'Tome',
                'display' => 'Dr. Carlos Tome’, Los Alamos National Laboratory',
            ],
            [
                'lastname' => 'Llorca',
                'display' => 'Dr. Javier Llorca, IMDEA, Madrid Spain',
            ],
        ]);
    }
}
