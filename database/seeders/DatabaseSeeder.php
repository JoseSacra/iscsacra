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
            'phone'=> '4741488591',
            'address'=> 'Jalisco, Mexico',
            'birthdate'=> date('1990-03-13'),
            'email' => 'sacra.isc@hotmail.com',
            'password'=> Hash::make('Sacra13_Muchalmi'),
        ]);
    }
}
