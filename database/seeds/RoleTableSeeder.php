<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();

        $role_doctor = new Role();
        $role_doctor->name = 'Doctor';
        $role_doctor->save();

        $role_pa = new Role();
        $role_pa->name = 'PA';
        $role_pa->save();

        $role_assist = new Role();
        $role_assist->name = 'Assistant';
        $role_assist->save();
    }
}
