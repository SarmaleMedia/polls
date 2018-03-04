<?php

use Illuminate\Database\Seeder;
use WC2018\Models\User;
use WC2018\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_manager  = Role::where('name', 'manager')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->name = 'Teodor';
        $employee->email = 'teodor@savin.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($role_admin);

        $manager = new User();
        $manager->name = 'Elena';
        $manager->email = 'popa.egabriela05@gmail.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $manager = new User();
        $manager->name = 'Doru';
        $manager->email = 'mihai.popeanga@gmail.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_user);
    }
}
