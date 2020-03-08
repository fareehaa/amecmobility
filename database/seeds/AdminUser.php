<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Profile;
use App\User;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            "name"=>'customer',
            "description"=>"customer Role",
            ]);
        $role = Role::create([
        "name" =>'Admin',
        "description"=>"Admin Role",
        ]);
        
        $user = User::create([
            "email"=>"admin@admin.com",
            "password"=>bcrypt('secret'),
            "role_id"=>$role->id,
        ]);
        Profile::create([
            "user_id"=>$user->id,
        ]);
           
       
    }
}
