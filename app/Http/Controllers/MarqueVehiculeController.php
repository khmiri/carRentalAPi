<?php
use App\Models\MarqueVehicule;
use Illuminate\Http\Request;

class MarqueVehiculeController extends Controller
{
    public function index()
    {
        $marques = MarqueVehicule::all();
        return response()->json(['marques' => $marques]);
    }

    public function show($id)
    {
        $marque = MarqueVehicule::find($id);

        if (!$marque) {
            return response()->json(['message' => 'MarqueVehicule not found'], 404);
        }

        return response()->json(['marque' => $marque]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $marque = MarqueVehicule::create($validatedData);

        return response()->json(['message' => 'MarqueVehicule ajoutée avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $marque = MarqueVehicule::find($id);

        if (!$marque) {
            return response()->json(['message' => 'MarqueVehicule not found'], 404);
        }

        $marque->update($request);

        return response()->json(['message' => 'MarqueVehicule mise à jour avec succès']);
    }

    public function destroy($id)
    {
        $marque = MarqueVehicule::find($id);

        if (!$marque) {
            return response()->json(['message' => 'MarqueVehicule not found'], 404);
        }

        $marque->delete();

        return response()->json(['message' => 'MarqueVehicule supprimée avec succès']);
    }
}

