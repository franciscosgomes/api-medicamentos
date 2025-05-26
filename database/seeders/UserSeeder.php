<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cria um usuário específico para testes, se necessário
        User::factory()->create([
            'name' => 'Usuário Teste',
            'email' => 'teste@example.com',
        ]);

        // Cria 10 usuários aleatórios
        User::factory()->count(10)->create();
    }
}