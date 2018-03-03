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
            'id'            => 1,
            "name"          => 'Belgium',
            "wc_group"      => 'G',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 2,
            "name"          => 'Croatia',
            "wc_group"      => 'D',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 3,
            "name"          => 'Denmark',
            "wc_group"      => 'C',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 4,
            "name"          => 'England',
            "wc_group"      => 'G',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 5,
            "name"          => 'France',
            "wc_group"      => 'C',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 6,
            "name"          => 'Germany',
            "wc_group"      => 'F',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 7,
            "name"          => 'Iceland',
            "wc_group"      => 'D',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 8,
            "name"          => 'Poland',
            "wc_group"      => 'H',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 9,
            "name"          => 'Portugal',
            "wc_group"      => 'B',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 10,
            "name"          => 'Russia',
            "wc_group"      => 'A',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 11,
            "name"          => 'Serbia',
            "wc_group"      => 'E',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 12,
            "name"          => 'Spain',
            "wc_group"      => 'B',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 13,
            "name"          => 'Sweden',
            "wc_group"      => 'F',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 14,
            "name"          => 'Switzerland',
            "wc_group"      => 'E',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 15,
            "name"          => 'Costa Rica',
            "wc_group"      => 'E',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 16,
            "name"          => 'Mexico',
            "wc_group"      => 'F',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 17,
            "name"          => 'Panama',
            "wc_group"      => 'G',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 18,
            "name"          => 'Australia',
            "wc_group"      => 'C',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 19,
            "name"          => 'Iran',
            "wc_group"      => 'B',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 20,
            "name"          => 'Japan',
            "wc_group"      => 'H',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 21,
            "name"          => 'Korea Republic',
            "wc_group"      => 'F',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 22,
            "name"          => 'Saudi Arabia',
            "wc_group"      => 'A',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 23,
            "name"          => 'Egypt',
            "wc_group"      => 'A',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 24,
            "name"          => 'Morocco',
            "wc_group"      => 'B',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 25,
            "name"          => 'Nigeria',
            "wc_group"      => 'D',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 26,
            "name"          => 'Senegal',
            "wc_group"      => 'H',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 27,
            "name"          => 'Tunisia',
            "wc_group"      => 'G',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 28,
            "name"          => 'Argentina',
            "wc_group"      => 'D',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 29,
            "name"          => 'Brazil',
            "wc_group"      => 'E',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 30,
            "name"          => 'Colombia',
            "wc_group"      => 'H',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 31,
            "name"          => 'Peru',
            "wc_group"      => 'C',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 32,
            "name"          => 'Uruguay',
            "wc_group"      => 'A',
            "wc_group_rank" => '4',
        ]
    ];
}
