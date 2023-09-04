<?php

use App\Models\Supplements;
use Illuminate\Http\Request;

class SupplementsController extends Controller
{
    public function index()
    {
        $supplements = Supplements::all();
        return response()->json(['supplements' => $supplements]);
    }

    public function show($id)
    {
        $supplement = Supplements::find($id);

        if (!$supplement) {
            return response()->json(['message' => 'Supplement not found'], 404);
        }

        return response()->json(['supplement' => $supplement]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $supplement = Supplements::create($validatedData);

        return response()->json(['message' => 'Supplement ajouté avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $supplement = Supplements::find($id);

        if (!$supplement) {
            return response()->json(['message' => 'Supplement not found'], 404);
        }

        $supplement->update($request);

        return response()->json(['message' => 'Supplement mis à jour avec succès']);
    }

    public function destroy($id)
    {
        $supplement = Supplements::find($id);

        if (!$supplement) {
            return response()->json(['message' => 'Supplement not found'], 404);
        }

        $supplement->delete();

        return response()->json(['message' => 'Supplement supprimé avec succès']);
    }
}

