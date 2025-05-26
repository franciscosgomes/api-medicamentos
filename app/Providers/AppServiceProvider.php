<?php 

// Define o namespace do provedor de serviços
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Classe responsável por registrar e inicializar serviços da aplicação Laravel
class AppServiceProvider extends ServiceProvider
{
    /**
     * Método usado para registrar serviços no contêiner de injeção de dependências.
     * Ideal para bindings e configurações globais.
     */
    public function register(): void
    {
        // Registre serviços personalizados aqui
    }

    /**
     * Método executado durante o boot da aplicação.
     * Usado para inicializações, como configuração de locale, timezones, etc.
     */
    public function boot(): void
    {
        // Código de boot específico do AppServiceProvider, se houver.
        // O mapeamento de rotas não pertence aqui.
    }
}
