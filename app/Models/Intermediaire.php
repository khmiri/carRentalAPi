<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermediaire extends Model
{
    protected $table = 'intermediaires'; // Assuming your table name is 'intermediaires'
    public $timestamps = false;
    protected $guarded = [];


    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }
}
