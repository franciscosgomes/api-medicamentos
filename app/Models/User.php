<?php

// Define o namespace do modelo User
namespace App\Models;

// Importa traits e classes necessárias para autenticação e notificações
// use Illuminate\Contracts\Auth\MustVerifyEmail; // Comentado: pode ser usado se for necessário verificar e-mails
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Modelo Eloquent que representa os usuários autenticáveis da aplicação
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Atributos que podem ser atribuídos em massa (mass assignment).
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atributos que serão ocultados ao converter o modelo em array ou JSON.
     * (Importante para segurança dos dados sensíveis)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Conversões de tipo automáticas ao acessar os atributos.
     * Ex: formata datas e aplica hash à senha.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
