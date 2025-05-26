<?php 

// Define o namespace onde está localizado o controlador
namespace App\Http\Controllers;

// Importa o modelo Medicamento e a classe Request do Laravel
use App\Models\Medicamento;
use Illuminate\Http\Request;

// Controlador responsável por gerenciar as requisições relacionadas ao recurso Medicamento
class MedicamentoController extends Controller
{
    // Retorna todos os medicamentos cadastrados (GET /medicamentos)
    public function index()
    {
        return Medicamento::all();
    }

    // Cadastra um novo medicamento após validar os dados recebidos (POST /medicamentos)
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'horarios' => 'required|string',
        ]);

        return Medicamento::create($request->all());
    }

    // Exibe os dados de um medicamento específico pelo ID (GET /medicamentos/{id})
    public function show($id)
    {
        return Medicamento::findOrFail($id);
    }

    // Atualiza os dados de um medicamento existente (PUT/PATCH /medicamentos/{id})
    public function update(Request $request, $id)
    {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->update($request->all());
        return $medicamento;
    }

    // Remove um medicamento pelo ID (DELETE /medicamentos/{id})
    public function destroy($id)
    {
        Medicamento::destroy($id);
        return response()->json(['mensagem' => 'Medicamento removido com sucesso']);
    }
}
