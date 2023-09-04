<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locataire;


// LocataireController.php
class LocataireController extends Controller
{

    public function index()
    {
        $locataires = Locataire::all();
        return response()->json($locataires);
    }

    public function show($id)
    {
        $locataire = Locataire::find($id);
        if (!$locataire) {
            return response()->json(['message' => 'Locataire not found'], 404);
        }
        return response()->json($locataire);
    }

    public function store(Request $request)
    {
        $locataire = new Locataire;
        $locataire->nom = $request->input('nom');
        $locataire->email = $request->input('email');
        $locataire->telephone = $request->input('telephone');
        $locataire->adresse = $request->input('adresse');        
        $locataire->cree_le = now();
        $locataire->mis_a_jour_le = now();
        $locataire->save();
        return response()->json(['message' => 'Locataire ajouté avec succès'], 201);;
    }

    public function update(Request $request, $id)
    {
        $locataire = Locataire::find($id);

        if (!$locataire) {
            return response()->json(['message' => 'Locataire not found'], 404);
        }
        $locataire->email = $request->input('email');
        $locataire->save();
        return response()->json($locataire);
    }

    public function destroy($id)
    {
        $locataire = Locataire::find($id);
        if (!$locataire) {
            return response()->json(['message' => 'Locataire not found'], 404);
        }
        $locataire->delete();
        return response()->json(['message' => 'Locataire deleted']);
    }
}
