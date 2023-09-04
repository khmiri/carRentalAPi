<?php
namespace App\Http\Controllers;

use App\Models\ChargeFixes;
use Illuminate\Http\Request;

class ChargeFixesController extends Controller
{
    public function index()
    {
        $chargesFixes = ChargeFixes::all();
        return response()->json(['chargesFixes' => $chargesFixes]);
    }

    public function show($id)
    {
        $chargeFixe = ChargeFixes::find($id);

        if (!$chargeFixe) {
            return response()->json(['message' => 'ChargeFixe not found'], 404);
        }

        return response()->json(['chargeFixe' => $chargeFixe]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $chargeFixe = ChargeFixes::create($validatedData);

        return response()->json(['message' => 'ChargeFixe ajoutée avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $chargeFixe = ChargeFixes::find($id);

        if (!$chargeFixe) {
            return response()->json(['message' => 'ChargeFixe not found'], 404);
        }

        $chargeFixe->update($request);

        return response()->json(['message' => 'ChargeFixe mise à jour avec succès']);
    }

    public function destroy($id)
    {
        $chargeFixe = ChargeFixes::find($id);

        if (!$chargeFixe) {
            return response()->json(['message' => 'ChargeFixe not found'], 404);
        }

        $chargeFixe->delete();

        return response()->json(['message' => 'ChargeFixe supprimée avec succès']);
    }
}

