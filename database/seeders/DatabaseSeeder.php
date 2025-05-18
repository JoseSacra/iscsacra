<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Jose Sacramento Muñoz Perez',
            'title' => 'Ingeniero en Sistemas Computacionales',
            'phone'=> '4741488591',
            'address'=> 'Jalisco, Mexico',
            'birthdate'=> date('1990-03-13'),
            'facebook' => 'http://www.facebook.com/JoseSacra',
            'twitter' => 'https://x.com/IscSacra',
            'linkedin' => 'https://www.linkedin.com/josesacra/',
            'email' => 'sacra.isc@hotmail.com',
            'password'=> Hash::make('Sacra13_Muchalmi'),
            'about' => 'Soy un ingeniero en sistemas computacionales con experiencia en desarrollo de software y administración de bases de datos. Me apasiona la tecnología y siempre busco aprender nuevas habilidades para mejorar mis capacidades profesionales.',
            'slogan' => 'La tecnología es mi pasión y la innovación mi motor.',
            'profile_photo_path' => 'https://www.gravatar.com/avatar/0f1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6?d=mp&f=y',
            
        ]);
    }
}
