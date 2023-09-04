<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $table = 'fournisseurs'; // Assuming your table name is 'fournisseurs'
    public $timestamps = false;
    protected $guarded = [];


    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }
}
