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
            "flag_path"     => 'images/flags/Belgium_flag.png',
            "wc_group"      => 'G',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 2,
            "name"          => 'Croatia',
            "flag_path"     => 'images/flags/Croatia_flag.png',
            "wc_group"      => 'D',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 3,
            "name"          => 'Denmark',
            "flag_path"     => 'images/flags/Denmark_flag.png',
            "wc_group"      => 'C',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 4,
            "name"          => 'England',
            "flag_path"     => 'images/flags/England_flag.png',
            "wc_group"      => 'G',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 5,
            "name"          => 'France',
            "flag_path"     => 'images/flags/France_flag.png',
            "wc_group"      => 'C',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 6,
            "name"          => 'Germany',
            "flag_path"     => 'images/flags/Germany_flag.png',
            "wc_group"      => 'F',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 7,
            "name"          => 'Iceland',
            "flag_path"     => 'images/flags/Iceland_flag.png',
            "wc_group"      => 'D',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 8,
            "name"          => 'Poland',
            "flag_path"     => 'images/flags/Poland_flag.png',
            "wc_group"      => 'H',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 9,
            "name"          => 'Portugal',
            "flag_path"     => 'images/flags/Portugal_flag.png',
            "wc_group"      => 'B',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 10,
            "name"          => 'Russia',
            "flag_path"     => 'images/flags/Russia_flag.png',
            "wc_group"      => 'A',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 11,
            "name"          => 'Serbia',
            "flag_path"     => 'images/flags/Serbia_flag.png',
            "wc_group"      => 'E',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 12,
            "name"          => 'Spain',
            "flag_path"     => 'images/flags/Spain_flag.png',
            "wc_group"      => 'B',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 13,
            "name"          => 'Sweden',
            "flag_path"     => 'images/flags/Sweden_flag.png',
            "wc_group"      => 'F',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 14,
            "name"          => 'Switzerland',
            "flag_path"     => 'images/flags/Switzerland_flag.png',
            "wc_group"      => 'E',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 15,
            "name"          => 'Costa Rica',
            "flag_path"     => 'images/flags/Costa_Rica_flag.png',
            "wc_group"      => 'E',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 16,
            "name"          => 'Mexico',
            "flag_path"     => 'images/flags/Mexico_flag.png',
            "wc_group"      => 'F',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 17,
            "name"          => 'Panama',
            "flag_path"     => 'images/flags/Panama_flag.png',
            "wc_group"      => 'G',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 18,
            "name"          => 'Australia',
            "flag_path"     => 'images/flags/Australia_flag.png',
            "wc_group"      => 'C',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 19,
            "name"          => 'Iran',
            "flag_path"     => 'images/flags/Iran_flag.png',
            "wc_group"      => 'B',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 20,
            "name"          => 'Japan',
            "flag_path"     => 'images/flags/Japan_flag.png',
            "wc_group"      => 'H',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 21,
            "name"          => 'Korea Republic',
            "flag_path"     => 'images/flags/South_Korea_flag.png',
            "wc_group"      => 'F',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 22,
            "name"          => 'Saudi Arabia',
            "flag_path"     => 'images/flags/Saudi_Arabia_flag.png',
            "wc_group"      => 'A',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 23,
            "name"          => 'Egypt',
            "flag_path"     => 'images/flags/Egypt_flag.png',
            "wc_group"      => 'A',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 24,
            "name"          => 'Morocco',
            "flag_path"     => 'images/flags/Morocco_flag.png',
            "wc_group"      => 'B',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 25,
            "name"          => 'Nigeria',
            "flag_path"     => 'images/flags/Nigeria_flag.png',
            "wc_group"      => 'D',
            "wc_group_rank" => '4',
        ],
        [
            'id'            => 26,
            "name"          => 'Senegal',
            "flag_path"     => 'images/flags/Senegal_flag.png',
            "wc_group"      => 'H',
            "wc_group_rank" => '2',
        ],
        [
            'id'            => 27,
            "name"          => 'Tunisia',
            "flag_path"     => 'images/flags/Tunisia_flag.png',
            "wc_group"      => 'G',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 28,
            "name"          => 'Argentina',
            "flag_path"     => 'images/flags/Argentina_flag.png',
            "wc_group"      => 'D',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 29,
            "name"          => 'Brazil',
            "flag_path"     => 'images/flags/Brazil_flag.png',
            "wc_group"      => 'E',
            "wc_group_rank" => '1',
        ],
        [
            'id'            => 30,
            "name"          => 'Colombia',
            "flag_path"     => 'images/flags/Colombia_flag.png',
            "wc_group"      => 'H',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 31,
            "name"          => 'Peru',
            "flag_path"     => 'images/flags/Peru_flag.png',
            "wc_group"      => 'C',
            "wc_group_rank" => '3',
        ],
        [
            'id'            => 32,
            "name"          => 'Uruguay',
            "flag_path"     => 'images/flags/Uruguay_flag.png',
            "wc_group"      => 'A',
            "wc_group_rank" => '4',
        ]
    ];
}
