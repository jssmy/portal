<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        User::create([
            'username'=>'jssmy',
            'name'=>'Joset Manihuari',
            'email'=>'jssmy@gmail.com',
            'password'=>bcrypt('123456789'),
            'type'=>'admin',        
            ]);
        User::create([
            'username'=>'usuario1',
            'name'=>'Berta',
            'email'=>'bertas@gmail.com',
            'password'=>bcrypt('123456789'),
            'type'=>'umasivo',        
            ]);
        User::create([
            'username'=>'usuario2',
            'name'=>'Alex',
            'email'=>'alex@gmail.com',
            'password'=>bcrypt('123456789'),
            'type'=>'uindividual',        
            ]);
    
    }
}
