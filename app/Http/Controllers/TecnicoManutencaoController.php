<?php

namespace App\Http\Controllers;

use App\Models\TecnicoManutencao;
use Illuminate\Http\Request;

class TecnicoManutencaoController extends Controller
{
    public function index()
    {
        return TecnicoManutencao::all();
    }

    public function show($id)
    {
        return TecnicoManutencao::findOrFail($id);
    }

    public function store(Request $request)
    {
        return TecnicoManutencao::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $tecnico = TecnicoManutencao::findOrFail($id);
        $tecnico->update($request->all());
        return $tecnico;
    }

    public function destroy($id)
    {
        TecnicoManutencao::destroy($id);
        return response()->json(['message' => 'Técnico de manutenção deletado com sucesso']);
    }
}
