<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
    {
        return Local::all();
    }

    public function show($id)
    {
        return Local::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Local::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $local = Local::findOrFail($id);
        $local->update($request->all());
        return $local;
    }

    public function destroy($id)
    {
        Local::destroy($id);
        return response()->json(['message' => 'Local deletado com sucesso']);
    }
}
