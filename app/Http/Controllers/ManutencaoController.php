<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index()
    {
        return Manutencao::all();
    }

    public function show($id)
    {
        return Manutencao::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Manutencao::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $manutencao = Manutencao::findOrFail($id);
        $manutencao->update($request->all());
        return $manutencao;
    }

    public function destroy($id)
    {
        Manutencao::destroy($id);
        return response()->json(['message' => 'Manutenção deletada com sucesso']);
    }
}
