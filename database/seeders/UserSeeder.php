<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory(20)->create();

       $user = new User();
       $user->name="Ana";
       $user->apellidos="Juarez Garcia";
       $user->email="ana@gmail.com";
       $user->email_verified_at = now();
       $user->password="12345678";
       $user->telefono=fake()->phoneNumber();
       $user->save();


       
    }
}
