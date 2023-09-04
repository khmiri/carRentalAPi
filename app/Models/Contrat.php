<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $table = 'contrats';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'locataire_id',
        'véhicule_id',
        'date_location',
        'date_retour',
        'prix_u',
        'montant_rest',
        'montant_avance',
        'montant_total',
        'statut',
        'créé_le',
        'mis_à_jour_le',
        'intermédiaire',
        'lieu_depart',
        'lieu_retour',
        'km_depart',
        'km_retour',
        'observation',
    ];

    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }

    // Define the relationships with other models, if any
}
