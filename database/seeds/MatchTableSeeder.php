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
        DB::table('matches')->insert(self::matchesGroupA());
        DB::table('matches')->insert(self::matchesGroupB());
        DB::table('matches')->insert(self::matchesGroupC());
        DB::table('matches')->insert(self::matchesGroupD());
        DB::table('matches')->insert(self::matchesGroupE());
        DB::table('matches')->insert(self::matchesGroupF());
        DB::table('matches')->insert(self::matchesGroupG());
        DB::table('matches')->insert(self::matchesGroupH());
    }

    // Teams
    public static $belgium      = 1;
    public static $croatia      = 2;
    public static $denmark      = 3;
    public static $england      = 4;
    public static $france       = 5;
    public static $germany      = 6;
    public static $iceland      = 7;
    public static $poland       = 8;
    public static $portugal     = 9;
    public static $russia       = 10;
    public static $serbia       = 11;
    public static $spain        = 12;
    public static $sweden       = 13;
    public static $switzerland  = 14;
    public static $costaRica    = 15;
    public static $mexico       = 16;
    public static $panama       = 17;
    public static $australia    = 18;
    public static $iran         = 19;
    public static $japan        = 20;
    public static $southKorea   = 21;
    public static $saudiArabia  = 22;
    public static $egypt        = 23;
    public static $morocco      = 24;
    public static $nigeria      = 25;
    public static $senegal      = 26;
    public static $tunisia      = 27;
    public static $argentina    = 28;
    public static $brazil       = 29;
    public static $colombia     = 30;
    public static $peru         = 31;
    public static $uruguay      = 32;

    // Stadiums
    public static $luzhniki         = 1;
    public static $krestovsky       = 2;
    public static $sochi            = 3;
    public static $yekaterinburg    = 4;
    public static $kazan            = 5;
    public static $nizhny           = 6;
    public static $rostov           = 7;
    public static $samara           = 8;
    public static $mordovia         = 9;
    public static $volgograd        = 10;
    public static $spartak          = 11;
    public static $kaliningrad      = 12;


    public static function matchesGroupA()
    {
        return [
            [
                'stadium_id'        => self::$luzhniki,
                'first_team_id'     => self::$russia,
                'second_team_id'    => self::$saudiArabia,
                'start_time'        => '2018-06-14 16:00:00',
                'round'             => 'Group A'
            ],
            [
                'stadium_id'        => self::$yekaterinburg,
                'first_team_id'     => self::$egypt,
                'second_team_id'    => self::$uruguay,
                'start_time'        => '2018-06-15 13:00:00',
                'round'             => 'Group A'
            ],
            [
                'stadium_id'        => self::$krestovsky,
                'first_team_id'     => self::$russia,
                'second_team_id'    => self::$egypt,
                'start_time'        => '2018-06-19 19:00:00',
                'round'             => 'Group A'
            ],
            [
                'stadium_id'        => self::$rostov,
                'first_team_id'     => self::$uruguay,
                'second_team_id'    => self::$saudiArabia,
                'start_time'        => '2018-06-20 16:00:00',
                'round'             => 'Group A'
            ],
            [
                'stadium_id'        => self::$samara,
                'first_team_id'     => self::$uruguay,
                'second_team_id'    => self::$russia,
                'start_time'        => '2018-06-25 15:00:00',
                'round'             => 'Group A'
            ],
            [
                'stadium_id'        => self::$volgograd,
                'first_team_id'     => self::$saudiArabia,
                'second_team_id'    => self::$egypt,
                'start_time'        => '2018-06-25 15:00:00',
                'round'             => 'Group A'
            ]
        ];
    }

    public static function matchesGroupB()
    {
        return [
            [
                'stadium_id'        => self::$krestovsky,
                'first_team_id'     => self::$morocco,
                'second_team_id'    => self::$iran,
                'start_time'        => '2018-06-15 16:00:00',
                'round'             => 'Group B'
            ],
            [
                'stadium_id'        => self::$sochi,
                'first_team_id'     => self::$portugal,
                'second_team_id'    => self::$spain,
                'start_time'        => '2018-06-15 19:00:00',
                'round'             => 'Group B'
            ],
            [
                'stadium_id'        => self::$luzhniki,
                'first_team_id'     => self::$portugal,
                'second_team_id'    => self::$morocco,
                'start_time'        => '2018-06-20 13:00:00',
                'round'             => 'Group B'
            ],
            [
                'stadium_id'        => self::$kazan,
                'first_team_id'     => self::$iran,
                'second_team_id'    => self::$spain,
                'start_time'        => '2018-06-20 19:00:00',
                'round'             => 'Group B'
            ],
            [
                'stadium_id'        => self::$mordovia,
                'first_team_id'     => self::$iran,
                'second_team_id'    => self::$portugal,
                'start_time'        => '2018-06-25 19:00:00',
                'round'             => 'Group B'
            ],
            [
                'stadium_id'        => self::$kaliningrad,
                'first_team_id'     => self::$spain,
                'second_team_id'    => self::$morocco,
                'start_time'        => '2018-06-25 19:00:00',
                'round'             => 'Group B'
            ]
        ];
    }

    public static function matchesGroupC()
    {
        return [
            [
                'stadium_id'        => self::$kazan,
                'first_team_id'     => self::$france,
                'second_team_id'    => self::$australia,
                'start_time'        => '2018-06-16 11:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => self::$mordovia,
                'first_team_id'     => self::$peru,
                'second_team_id'    => self::$denmark,
                'start_time'        => '2018-06-16 17:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => self::$samara,
                'first_team_id'     => self::$denmark,
                'second_team_id'    => self::$australia,
                'start_time'        => '2018-06-21 13:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => self::$yekaterinburg,
                'first_team_id'     => self::$france,
                'second_team_id'    => self::$peru,
                'start_time'        => '2018-06-21 16:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => self::$luzhniki,
                'first_team_id'     => self::$denmark,
                'second_team_id'    => self::$france,
                'start_time'        => '2018-06-26 15:00:00',
                'round'             => 'Group C'
            ],
            [
                'stadium_id'        => self::$sochi,
                'first_team_id'     => self::$australia,
                'second_team_id'    => self::$peru,
                'start_time'        => '2018-06-26 15:00:00',
                'round'             => 'Group C'
            ]
        ];
    }

    public static function matchesGroupD()
    {
        return [
            [
                'stadium_id'        => self::$spartak,
                'first_team_id'     => self::$argentina,
                'second_team_id'    => self::$iceland,
                'start_time'        => '2018-06-16 14:00:00',
                'round'             => 'Group D'
            ],
            [
                'stadium_id'        => self::$kaliningrad,
                'first_team_id'     => self::$croatia,
                'second_team_id'    => self::$nigeria,
                'start_time'        => '2018-06-16 20:00:00',
                'round'             => 'Group D'
            ],
            [
                'stadium_id'        => self::$nizhny,
                'first_team_id'     => self::$argentina,
                'second_team_id'    => self::$croatia,
                'start_time'        => '2018-06-21 19:00:00',
                'round'             => 'Group D'
            ],
            [
                'stadium_id'        => self::$volgograd,
                'first_team_id'     => self::$nigeria,
                'second_team_id'    => self::$iceland,
                'start_time'        => '2018-06-22 16:00:00',
                'round'             => 'Group D'
            ],
            [
                'stadium_id'        => self::$krestovsky,
                'first_team_id'     => self::$nigeria,
                'second_team_id'    => self::$argentina,
                'start_time'        => '2018-06-26 19:00:00',
                'round'             => 'Group D'
            ],
            [
                'stadium_id'        => self::$rostov,
                'first_team_id'     => self::$iceland,
                'second_team_id'    => self::$croatia,
                'start_time'        => '2018-06-26 19:00:00',
                'round'             => 'Group D'
            ]
        ];
    }

    public static function matchesGroupE()
    {
        return [
            [
                'stadium_id'        => self::$samara,
                'first_team_id'     => self::$costaRica,
                'second_team_id'    => self::$serbia,
                'start_time'        => '2018-06-17 13:00:00',
                'round'             => 'Group E'
            ],
            [
                'stadium_id'        => self::$rostov,
                'first_team_id'     => self::$brazil,
                'second_team_id'    => self::$switzerland,
                'start_time'        => '2018-06-17 19:00:00',
                'round'             => 'Group E'
            ],
            [
                'stadium_id'        => self::$krestovsky,
                'first_team_id'     => self::$brazil,
                'second_team_id'    => self::$costaRica,
                'start_time'        => '2018-06-22 13:00:00',
                'round'             => 'Group E'
            ],
            [
                'stadium_id'        => self::$kaliningrad,
                'first_team_id'     => self::$serbia,
                'second_team_id'    => self::$switzerland,
                'start_time'        => '2018-06-22 19:00:00',
                'round'             => 'Group E'
            ],
            [
                'stadium_id'        => self::$spartak,
                'first_team_id'     => self::$serbia,
                'second_team_id'    => self::$brazil,
                'start_time'        => '2018-06-27 19:00:00',
                'round'             => 'Group E'
            ],
            [
                'stadium_id'        => self::$nizhny,
                'first_team_id'     => self::$switzerland,
                'second_team_id'    => self::$costaRica,
                'start_time'        => '2018-06-27 19:00:00',
                'round'             => 'Group E'
            ]
        ];
    }

    public static function matchesGroupF()
    {
        return [
            [
                'stadium_id'        => self::$luzhniki,
                'first_team_id'     => self::$germany,
                'second_team_id'    => self::$mexico,
                'start_time'        => '2018-06-17 16:00:00',
                'round'             => 'Group F'
            ],
            [
                'stadium_id'        => self::$nizhny,
                'first_team_id'     => self::$sweden,
                'second_team_id'    => self::$southKorea,
                'start_time'        => '2018-06-18 13:00:00',
                'round'             => 'Group F'
            ],
            [
                'stadium_id'        => self::$rostov,
                'first_team_id'     => self::$southKorea,
                'second_team_id'    => self::$mexico,
                'start_time'        => '2018-06-23 16:00:00',
                'round'             => 'Group F'
            ],
            [
                'stadium_id'        => self::$sochi,
                'first_team_id'     => self::$germany,
                'second_team_id'    => self::$sweden,
                'start_time'        => '2018-06-23 19:00:00',
                'round'             => 'Group F'
            ],

            [
                'stadium_id'        => self::$kazan,
                'first_team_id'     => self::$southKorea,
                'second_team_id'    => self::$germany,
                'start_time'        => '2018-06-27 15:00:00',
                'round'             => 'Group F'
            ],
            [
                'stadium_id'        => self::$yekaterinburg,
                'first_team_id'     => self::$mexico,
                'second_team_id'    => self::$sweden,
                'start_time'        => '2018-06-27 15:00:00',
                'round'             => 'Group F'
            ]
        ];
    }

    public static function matchesGroupG()
    {
        return [
            [
                'stadium_id'        => self::$sochi,
                'first_team_id'     => self::$belgium,
                'second_team_id'    => self::$panama,
                'start_time'        => '2018-06-18 16:00:00',
                'round'             => 'Group G'
            ],
            [
                'stadium_id'        => self::$volgograd,
                'first_team_id'     => self::$tunisia,
                'second_team_id'    => self::$england,
                'start_time'        => '2018-06-18 19:00:00',
                'round'             => 'Group G'
            ],
            [
                'stadium_id'        => self::$spartak,
                'first_team_id'     => self::$belgium,
                'second_team_id'    => self::$tunisia,
                'start_time'        => '2018-06-23 13:00:00',
                'round'             => 'Group G'
            ],
            [
                'stadium_id'        => self::$nizhny,
                'first_team_id'     => self::$england,
                'second_team_id'    => self::$panama,
                'start_time'        => '2018-06-24 13:00:00',
                'round'             => 'Group G'
            ],
            [
                'stadium_id'        => self::$kaliningrad,
                'first_team_id'     => self::$england,
                'second_team_id'    => self::$belgium,
                'start_time'        => '2018-06-28 19:00:00',
                'round'             => 'Group G'
            ],
            [
                'stadium_id'        => self::$mordovia,
                'first_team_id'     => self::$panama,
                'second_team_id'    => self::$tunisia,
                'start_time'        => '2018-06-28 19:00:00',
                'round'             => 'Group G'
            ]
        ];
    }

    public static function matchesGroupH()
    {
        return [
            [
                'stadium_id'        => self::$mordovia,
                'first_team_id'     => self::$colombia,
                'second_team_id'    => self::$japan,
                'start_time'        => '2018-06-19 13:00:00',
                'round'             => 'Group H'
            ],
            [
                'stadium_id'        => self::$spartak,
                'first_team_id'     => self::$poland,
                'second_team_id'    => self::$senegal,
                'start_time'        => '2018-06-19 16:00:00',
                'round'             => 'Group H'
            ],
            [
                'stadium_id'        => self::$yekaterinburg,
                'first_team_id'     => self::$japan,
                'second_team_id'    => self::$senegal,
                'start_time'        => '2018-06-24 16:00:00',
                'round'             => 'Group H'
            ],
            [
                'stadium_id'        => self::$kazan,
                'first_team_id'     => self::$poland,
                'second_team_id'    => self::$colombia,
                'start_time'        => '2018-06-24 19:00:00',
                'round'             => 'Group H'
            ],
            [
                'stadium_id'        => self::$volgograd,
                'first_team_id'     => self::$japan,
                'second_team_id'    => self::$poland,
                'start_time'        => '2018-06-28 15:00:00',
                'round'             => 'Group H'
            ],
            [
                'stadium_id'        => self::$samara,
                'first_team_id'     => self::$senegal,
                'second_team_id'    => self::$colombia,
                'start_time'        => '2018-06-28 15:00:00',
                'round'             => 'Group H'
            ]
        ];
    }
}
