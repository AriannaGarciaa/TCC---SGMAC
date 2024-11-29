<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function index()
    {
        return Equipamento::all();
    }

    public function show($id)
    {
        return Equipamento::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Equipamento::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update($request->all());
        return $equipamento;
    }

    public function destroy($id)
    {
        Equipamento::destroy($id);
        return response()->json(['message' => 'Equipamento deletado com sucesso']);
    }
}
