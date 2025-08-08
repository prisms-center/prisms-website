<?php

namespace App\People;

use Illuminate\Support\Collection;

class PostDocs
{
    public static function all(): Collection
    {
        return collect([
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
        ]);
    }
}
