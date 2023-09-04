<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intermediaire;

class IntermediaireController extends Controller
{
    
    public function index()
    {
        $intermediaires = Intermediaire::all();
        return response()->json($intermediaires);
    }

    public function show($id)
    {
        $intermediaire = Intermediaire::find($id);
        if (!$intermediaire) {
            return response()->json(['message' => 'intermediaire not found'], 404);
        }
        return response()->json($intermediaire);
    }

    public function store(Request $request)
    {
        $intermediaire = new Intermediaire;
        $intermediaire->nom = $request->input('nom');
        $intermediaire->email = $request->input('email');
        $intermediaire->telephone = $request->input('telephone');
        $intermediaire->adresse = $request->input('adresse');        
        $intermediaire->cree_le = now();
        $intermediaire->mis_a_jour_le = now();
        $intermediaire->save();
        return response()->json(['message' => 'intermediaire ajouté avec succès'], 201);;
    }

    public function update(Request $request, $id)
    {
        $intermediaire = Intermediaire::find($id);

        if (!$intermediaire) {
            return response()->json(['message' => 'intermediaire not found'], 404);
        }
        $intermediaire->fill($request->all());
        $intermediaire->mis_a_jour_le=now();
        $intermediaire->save();
        return response()->json($intermediaire);
    }

    public function destroy($id)
    {
        $intermediaire = Intermediaire::find($id);
        if (!$intermediaire) {
            return response()->json(['message' => 'intermediaire not found'], 404);
        }
        $intermediaire->delete();
        return response()->json(['message' => 'intermediaire deleted']);
    }
}
