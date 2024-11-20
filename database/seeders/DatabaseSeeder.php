<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        // User::create([
        //     'name' => 'Francisca CLIENT Root',
        //     'email' => 'client@unilab.edu.br',
        //     'password' => Hash::make('root'),
        // ]);

        //
        $this->call(VwUsuariosCatracaSeeder::class);

    }
}
