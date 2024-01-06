<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class user_sedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Admin','Super Admin','User'];

        for($i=0;$i<count($name);$i++){
            $role = App\Role::create([
                'name'=> $name[$i],
                'slug'=> str::slug($name[$i])
            ]);

            $user = App\User::create([
                'name'=> $name[$i],
                'username'=> str::slug($name[$i]),
                'role_id'=> $role->id,
                'email'=> str::slug($name[$i])."@google.com",
                'password'=> Hash::make('rahasia'),
            ]);
        }
    }
}