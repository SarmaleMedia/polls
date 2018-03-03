<?php

use Illuminate\Database\Seeder;

class StadiumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert(self::$stadiums);
    }

    public static $stadiums = [
        [
            'id'        => 1,
            'name'      => 'Luzhniki Stadium',
            'capacity'  => 81000,
            'city'      => 'Moscow'
        ],
        [
            'id'        => 2,
            'name'      => 'Krestovsky Stadium',
            'capacity'  => 68134,
            'city'      => 'Saint Petersburg'
        ],
        [
            'id'        => 3,
            'name'      => 'Fisht Stadium',
            'capacity'  => 47659,
            'city'      => 'Sochi'
        ],
        [
            'id'        => 4,
            'name'      => 'Ekaterinburg Arena',
            'capacity'  => 35696,
            'city'      => 'Yekaterinburg'
        ],
        [
            'id'        => 5,
            'name'      => 'Kazan Arena',
            'capacity'  => 45379,
            'city'      => 'Kazan'
        ],
        [
            'id'        => 6,
            'name'      => 'Nizhny Novgorod Stadium',
            'capacity'  => 44899,
            'city'      => 'Nizhny Novgorod'
        ],
        [
            'id'        => 7,
            'name'      => 'Rostov Arena',
            'capacity'  => 45000,
            'city'      => 'Rostov-on-Don'
        ],
        [
            'id'        => 8,
            'name'      => 'Samara Arena',
            'capacity'  => 44918,
            'city'      => 'Samara'
        ],
        [
            'id'        => 9,
            'name'      => 'Mordovia Arena',
            'capacity'  => 44442,
            'city'      => 'Saransk'
        ],
        [
            'id'        => 10,
            'name'      => 'Volgograd Arena',
            'capacity'  => 45568,
            'city'      => 'Volgograd'
        ],
        [
            'id'        => 11,
            'name'      => 'Spartak Stadium',
            'capacity'  => 45360,
            'city'      => 'Moscow'
        ],
        [
            'id'        => 12,
            'name'      => 'Kaliningrad Stadium',
            'capacity'  => 35212,
            'city'      => 'Kaliningrad'
        ],
    ];
}
