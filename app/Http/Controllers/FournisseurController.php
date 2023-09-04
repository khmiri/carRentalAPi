<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

// FournisseurController.php
class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return response()->json($fournisseurs);
    }

    public function show($id)
    {
        $fournisseur = Fournisseur::find($id);
        if (!$fournisseur) {
            return response()->json(['message' => 'Fournisseur not found'], 404);
        }
        return response()->json($fournisseur);
    }

    public function store(Request $request)
    {
        $fournisseur = new Fournisseur;
        $fournisseur->nom = $request->input('nom');
        $fournisseur->email = $request->input('email');
        $fournisseur->telephone = $request->input('telephone');
        $fournisseur->adresse = $request->input('adresse');        
        $fournisseur->cree_le = now();
        $fournisseur->mis_a_jour_le = now();
        $fournisseur->save();
        return response()->json($fournisseur, 201);
    }

    public function update(Request $request, $id)
    {
        $fournisseur = Fournisseur::find($id);
        if (!$fournisseur) {
            return response()->json(['message' => 'Fournisseur not found'], 404);
        }
        $fournisseur->fill($request->all());
        $fournisseur->mis_a_jour_le = now();
        $fournisseur->save();
        return response()->json($fournisseur);
    }

    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        if (!$fournisseur) {
            return response()->json(['message' => 'Fournisseur not found'], 404);
        }
        $fournisseur->delete();
        return response()->json(['message' => 'Fournisseur deleted']);
    }
}

