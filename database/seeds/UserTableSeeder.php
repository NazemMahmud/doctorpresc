<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_doctor   = Role::where('name', 'Doctor')->first();
//        $role_author = Role::where('name', 'Author')->first();
        $role_admin  = Role::where('name', 'Admin')->first();
       /*

        $table->string('picture')->nullable();
        $table->enum('status', ['-1', '0', '1']); */

        $admin           = new User();
        $admin->name     = 'Simple Admin';
        $admin->email    = 'nazem.piash10@gmail.com';
        $admin->password = bcrypt('1234');
        $admin->contact   = '+8801853730155';
        $admin->address  = 'dhaka, bangladesh';
        $admin->status   = '1';
        $admin->save();
        $admin->roles()->attach($role_admin);

        $doctor           = new User();
        $doctor->name     = 'Simple doctor';
        $doctor->email    = 'simpledoctor@gmail.com';
        $doctor->password = bcrypt('doctor123');
        $doctor->contact   = '+8801853730155';
        $doctor->address  = 'dhaka, bangladesh';
//        $doctor->picture  = 'name.jpg';
        $doctor->status   = '1';
        $doctor->save();
        $doctor->roles()->attach($role_doctor);

       /* $admin           = new User();
        $admin->name     = 'Simple admin';
        $admin->email    = 'simpleadmin@gmail.com';
        $admin->password = bcrypt('admin123');
        $admin->mobile   = '+8801853730155';
        $admin->address  = 'dhaka, bangladesh';
        $admin->picture  = 'name.jpg';
        $admin->status   = '1';
        $admin->save();
        $admin->roles()->attach($role_admin); */
    }
}
