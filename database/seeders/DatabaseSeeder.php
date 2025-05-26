<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // Chama os seeders individuais
        $this->call([
            UserSeeder::class,
            MedicamentoSeeder::class,
            // Adicione outros seeders aqui conforme necessário
        ]);
    }
}
