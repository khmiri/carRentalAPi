<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $table = 'reglements'; // Assuming your table name is 'locataires'
    public $timestamps = false;
    protected $guarded = [];


    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }
}
