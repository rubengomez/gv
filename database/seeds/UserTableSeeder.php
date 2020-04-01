<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = Role::where('name','User')->first();
        $admin_role = Role::where('name','Admin')->first();

        $user = new User();
        $user->name = 'Brandon';
        $user->email = 'Brandon0893.bg@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $admin_role->id;
        $user->save();

        $user = new User();
        $user->name = 'Jose';
        $user->email = 'jose@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $user_role->id;
        $user->save();

        $user = new User();
        $user->name = 'Compañia numero1';
        $user->email = 'company1@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $user_role->id;
        $user->save();

        $user = new User();
        $user->name = 'Compañia numero2';
        $user->email = 'company2@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $user_role->id;
        $user->save();

        $user = new User();
        $user->name = 'Compañia numero3';
        $user->email = 'company3@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $user_role->id;
        $user->save();
    }
}
