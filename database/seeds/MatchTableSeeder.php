<?php

use Illuminate\Database\Seeder;
use WC2018\Models\Stadium;
use WC2018\Models\Team;

class MatchTableSeeder extends Seeder
{
    public $teams = [];
    public $stadiums = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = Team::all();
        foreach ($teams as $team) {
            $this->teams[$team->name] = $team->id;
        }

        $stadiums = Stadium::all();
        foreach ($stadiums as $stadium) {
            $this->stadiums[$stadium->name] = $stadium->id;
        }

        DB::table('matches')->insert(self::$matchesGroupA);
        DB::table('matches')->insert(self::$matchesGroupB);
        DB::table('matches')->insert($this->getGroupC($this->teams, $this->stadiums));
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
            'first_team_id'     => 1,
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
            'second_team_id'    => 1,
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

    public function getGroupC($teams, $stadiums) {
        return [
            [
                'stadium_id'        => $stadiums["Kazan Arena"],
                'first_team_id'     => $teams["France"],
                'second_team_id'    => $teams["Australia"],
                'start_time'        => '2018-06-16 11:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => $stadiums["Mordovia Arena"],
                'first_team_id'     => $teams["Peru"],
                'second_team_id'    => $teams["Denmark"],
                'start_time'        => '2018-06-16 17:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => $stadiums["Cosmos Arena"],
                'first_team_id'     => $teams["Denmark"],
                'second_team_id'    => $teams["Australia"],
                'start_time'        => '2018-06-21 13:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => $stadiums["Ekaterinburg Arena"],
                'first_team_id'     => $teams["France"],
                'second_team_id'    => $teams["Peru"],
                'start_time'        => '2018-06-21 16:00:00',
                'round'             => 'Group C'
            ],
        ];
    }
}
