<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index()
    {
        $partidos = Partido::all();
        return response()->json($partidos);
    }

    public function store(Request $request)
    {
        $partido = Partido::create($request->all());
        return response()->json($partido, 201);
    }

    public function show(Partido $partido)
    {
        return response()->json($partido);
    }

    public function update(Request $request, Partido $partido)
    {
        $partido->update($request->all());
        return response()->json($partido);
    }

    public function destroy(Partido $partido)
    {
        $partido->delete();
        return response()->json(null, 204);
    }
}
