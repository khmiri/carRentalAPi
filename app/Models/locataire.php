<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    protected $table = 'locataires'; // Assuming your table name is 'locataires'
    public $timestamps = false;


    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }
}