<?php
use App\Models\Reglement;
use Illuminate\Http\Request;

class ReglementController extends Controller
{
    public function index()
    {
        $reglements = Reglement::all();
        return response()->json(['reglements' => $reglements]);
    }

    public function show($id)
    {
        $reglement = Reglement::find($id);

        if (!$reglement) {
            return response()->json(['message' => 'Reglement not found'], 404);
        }

        return response()->json(['reglement' => $reglement]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contrat_id' => 'required|integer',
            'montant' => 'required|numeric',
            'montant_rest' => 'required|numeric',
            'montant_facture' => 'required|numeric',
            'mode_payment' => 'required|string',
            'num_cheque' => 'nullable|string',
            'description' => 'nullable|string',
            'date_echeance' => 'required|date',
        ]);

        $reglement = Reglement::create($validatedData);

        return response()->json(['message' => 'Reglement ajouté avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'contrat_id' => 'required|integer',
            'montant' => 'required|numeric',
            'montant_rest' => 'required|numeric',
            'montant_facture' => 'required|numeric',
            'mode_payment' => 'required|string',
            'num_cheque' => 'nullable|string',
            'description' => 'nullable|string',
            'date_echeance' => 'required|date',
        ]);

        $reglement = Reglement::find($id);

        if (!$reglement) {
            return response()->json(['message' => 'Reglement not found'], 404);
        }

        $reglement->update($request);

        return response()->json(['message' => 'Reglement mis à jour avec succès']);
    }

    public function destroy($id)
    {
        $reglement = Reglement::find($id);

        if (!$reglement) {
            return response()->json(['message' => 'Reglement not found'], 404);
        }

        $reglement->delete();

        return response()->json(['message' => 'Reglement supprimé avec succès']);
    }
}
