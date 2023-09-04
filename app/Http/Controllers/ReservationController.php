<?php

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return response()->json(['reservations' => $reservations]);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json(['message' => 'Reservation not found'], 404);
        }

        return response()->json(['reservation' => $reservation]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $reservation = Reservation::create($validatedData);

        return response()->json(['message' => 'Reservation ajoutée avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules here
        ]);

        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json(['message' => 'Reservation not found'], 404);
        }

        $reservation->update($request);

        return response()->json(['message' => 'Reservation mise à jour avec succès']);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json(['message' => 'Reservation not found'], 404);
        }

        $reservation->delete();

        return response()->json(['message' => 'Reservation supprimée avec succès']);
    }
}

