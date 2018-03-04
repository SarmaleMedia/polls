<?php

use Illuminate\Database\Seeder;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert(self::$matchesGroupA);
        DB::table('matches')->insert(self::$matchesGroupB);
    }

    public static $matchesGroupA = [
        [
            'stadium_id'        => 1,
            'first_team_id'     => 10,
            'second_team_id'    => 22,
            'start_time'        => '2018-06-14 16:00:00',
            'round'             => 'Group A'
        ],
        [
            'stadium_id'        => 4,
            'first_team_id'     => 23,
            'second_team_id'    => 32,
            'start_time'        => '2018-06-15 13:00:00',
            'round'             => 'Group A'
        ],
        [
            'stadium_id'        => 2,
            'first_team_id'     => 10,
            'second_team_id'    => 23,
            'start_time'        => '2018-06-19 19:00:00',
            'round'             => 'Group A'
        ],
        [
            'stadium_id'        => 7,
            'first_team_id'     => 32,
            'second_team_id'    => 22,
            'start_time'        => '2018-06-20 16:00:00',
            'round'             => 'Group A'
        ],
        [
            'stadium_id'        => 8,
            'first_team_id'     => 32,
            'second_team_id'    => 10,
            'start_time'        => '2018-06-25 15:00:00',
            'round'             => 'Group A'
        ],
        [
            'stadium_id'        => 10,
            'first_team_id'     => 22,
            'second_team_id'    => 23,
            'start_time'        => '2018-06-25 15:00:00',
            'round'             => 'Group A'
        ],
    ];

    public static $matchesGroupB = [
        [
            'stadium_id'        => 2,
            'first_team_id'     => 24,
            'second_team_id'    => 19,
            'start_time'        => '2018-06-15 16:00:00',
            'round'             => 'Group B'
        ],
        [
            'stadium_id'        => 3,
            'first_team_id'     => 9,
            'second_team_id'    => 12,
            'start_time'        => '2018-06-15 19:00:00',
            'round'             => 'Group B'
        ],
        [
            'stadium_id'        => 1,
            'first_team_id'     => 9,
            'second_team_id'    => 24,
            'start_time'        => '2018-06-20 13:00:00',
            'round'             => 'Group B'
        ],
        [
            'stadium_id'        => 5,
            'first_team_id'     => 19,
            'second_team_id'    => 12,
            'start_time'        => '2018-06-20 19:00:00',
            'round'             => 'Group B'
        ],
        [
            'stadium_id'        => 9,
            'first_team_id'     => 19,
            'second_team_id'    => 9,
            'start_time'        => '2018-06-25 19:00:00',
            'round'             => 'Group B'
        ],
        [
            'stadium_id'        => 12,
            'first_team_id'     => 12,
            'second_team_id'    => 24,
            'start_time'        => '2018-06-25 19:00:00',
            'round'             => 'Group B'
        ],
    ];
}
