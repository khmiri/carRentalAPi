<?php
namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::all();
        return response()->json(['vehicules' => $vehicules]);
    }

    public function show($id)
    {
        $vehicule = Vehicule::find($id);

        if (!$vehicule) {
            return response()->json(['message' => 'Vehicule not found'], 404);
        }

        return response()->json(['vehicule' => $vehicule]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $vehicule = Vehicule::create($validatedData);

        return response()->json(['message' => 'Vehicule ajouté avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $vehicule = Vehicule::find($id);

        if (!$vehicule) {
            return response()->json(['message' => 'Vehicule not found'], 404);
        }

        $vehicule->update($request);

        return response()->json(['message' => 'Vehicule mis à jour avec succès']);
    }

    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);

        if (!$vehicule) {
            return response()->json(['message' => 'Vehicule not found'], 404);
        }

        $vehicule->delete();

        return response()->json(['message' => 'Vehicule supprimé avec succès']);
    }
}

