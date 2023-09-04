<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
//just test
class ContratController extends Controller
{
    public function index()
    {
        $contrats = Contrat::all();
        return response()->json($contrats);
    }

    public function show($id)
    {
        $contrat = Contrat::find($id);
        if (!$contrat) {
            return response()->json(['message' => 'Contrat not found'], 404);
        }
        return response()->json($contrat);
    }

    public function store(Request $request)
    {
        $contrat = new Contrat();
        $contrat->fill($request->all());
        $contrat->créé_le = now();
        $contrat->mis_à_jour_le = now();
        $contrat->save();

        return response()->json($contrat, 201);
    }

    public function update(Request $request, $id)
    {
        $contrat = Contrat::find($id);
        if (!$contrat) {
            return response()->json(['message' => 'Contrat not found'], 404);
        }
        $contrat->fill($request->all());
        $contrat->mis_à_jour_le = now();
        $contrat->save();

        return response()->json($contrat);
    }

    public function destroy($id)
    {
        $contrat = Contrat::find($id);
        if (!$contrat) {
            return response()->json(['message' => 'Contrat not found'], 404);
        }
        $contrat->delete();

        return response()->json(['message' => 'Contrat deleted']);
    }
}
