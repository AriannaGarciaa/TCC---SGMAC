<?php

namespace App\Http\Controllers;

use App\Models\ManutencoesEquipamentos;
use Illuminate\Http\Request;

class ManutencoesEquipamentosController extends Controller
{
    public function index()
    {
        return ManutencoesEquipamentos::all();
    }

    public function store(Request $request)
    {
        return ManutencoesEquipamentos::create($request->all());
    }

    public function destroy($id)
    {
        ManutencoesEquipamentos::destroy($id);
        return response()->json(['message' => 'Registro de Manutenção e Equipamento deletado com sucesso']);
    }
}
