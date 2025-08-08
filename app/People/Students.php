<?php

namespace App\People;

use Illuminate\Support\Collection;

class Students
{
    public static function all(): Collection
    {
        return collect([
            [
                'title' => '',
                'first_name' => 'Gurmeet',
                'last_name' => 'Singh',
                'email' => 'gmsingh@umich.edu',
                'research' => '',
                'advisor' => 'Professor Veera Sundararaghavan',
                'image' => '',
                'blurb' => '',
            ],
            [
                'title' => '',
                'first_name' => 'Siddhartha',
                'last_name' => 'Srivastava',
                'email' => 'sidsrivah@umich.edu',
                'research' => '',
                'advisor' => 'Professor Veera Sundararaghavan',
                'image' => '',
                'blurb' => '',
            ],
            [
                'title' => '',
                'first_name' => 'Vishwas',
                'last_name' => 'Goel',
                'email' => 'vishwasg@umich.edu',
                'research' => '',
                'advisor' => 'Professor Katsuyo Thornton',
                'image' => '',
                'blurb' => '',
            ],
            [
                'title' => '',
                'first_name' => 'Yanjun',
                'last_name' => 'Lyu',
                'email' => 'yanjunlv@umich.edu',
                'research' => '',
                'advisor' => 'Dr. Katsuyo Thornton',
                'image' => 'assets/img/people/yanjun_lyu.jpeg',
                'blurb' => 'My research in the PRISMS program currently focuses on phase-field modeling of corrosion in magnesium alloys. Specifically, he combines the phase-field model and smoothed boundary methods to investigate the microgalvanic effects of second phases on the corrosion behavior of Mg alloys. This work serves to understand the effect of second phases on Mg alloy corrosion, which sheds a light on designing corrosion-resistant Mg alloys.',
            ],
        ]);
    }
}
