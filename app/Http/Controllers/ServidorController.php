<?php

namespace App\Http\Controllers;

use App\Models\Servidor;
use Illuminate\Http\Request;

class ServidorController extends Controller
{
    public function index()
    {
        return Servidor::all(); // Lista todos os servidores
    }

    public function show($id)
    {
        return Servidor::findOrFail($id); // Retorna um servidor específico
    }

    public function store(Request $request)
    {
        return Servidor::create($request->all()); // Cria um novo servidor
    }

    public function update(Request $request, $id)
    {
        $servidor = Servidor::findOrFail($id);
        $servidor->update($request->all());
        return $servidor;
    }

    public function destroy($id)
    {
        Servidor::destroy($id); // Deleta o servidor
        return response()->json(['message' => 'Servidor deletado com sucesso']);
    }
}
