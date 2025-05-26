<?php

// Define o namespace do modelo
namespace App\Models;

// Importa a classe base Model do Eloquent (ORM do Laravel)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo Eloquent que representa a tabela 'medicamentos' no banco de dados
class Medicamento extends Model
{
    // Habilita o uso de factories para este modelo
    use HasFactory;

    // Define os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = ['nome', 'horarios'];
}
