<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(self::$teams);
    }

    public static $teams = [
        [
            "name" => 'Belgium'
        ],
        [
            "name" => 'Croatia'
        ],
        [
            "name" => 'Denmark'
        ],
        [
            "name" => 'England'
        ],
        [
            "name" => 'France'
        ],
        [
            "name" => 'Germany'
        ],
        [
            "name" => 'Iceland'
        ],
        [
            "name" => 'Poland'
        ],
        [
            "name" => 'Portugal'
        ],
        [
            "name" => 'Russia'
        ],
        [
            "name" => 'Serbia'
        ],
        [
            "name" => 'Spain'
        ],
        [
            "name" => 'Sweden'
        ],
        [
            "name" => 'Switzerland'
        ],
        [
            "name" => 'Costa Rica'
        ],
        [
            "name" => 'Mexico'
        ],
        [
            "name" => 'Panama'
        ],
        [
            "name" => 'Australia'
        ],
        [
            "name" => 'Iran'
        ],
        [
            "name" => 'Japan'
        ],
        [
            "name" => 'Korea Republic'
        ],
        [
            "name" => 'Saudi Arabia'
        ],
        [
            "name" => 'Egypt'
        ],
        [
            "name" => 'Morocco'
        ],
        [
            "name" => 'Nigeria'
        ],
        [
            "name" => 'Senegal'
        ],
        [
            "name" => 'Tunisia'
        ],
        [
            "name" => 'Argentina'
        ],
        [
            "name" => 'Brazil'
        ],
        [
            "name" => 'Colombia'
        ],
        [
            "name" => 'Peru'
        ],
        [
            "name" => 'Uruguay'
        ]
    ];
}
