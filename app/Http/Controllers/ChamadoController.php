<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function index()
    {
        return Chamado::all();
    }

    public function show($id)
    {
        return Chamado::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Chamado::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $chamado = Chamado::findOrFail($id);
        $chamado->update($request->all());
        return $chamado;
    }

    public function destroy($id)
    {
        Chamado::destroy($id);
        return response()->json(['message' => 'Chamado deletado com sucesso']);
    }
}
