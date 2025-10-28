<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reparations extends Model
{
    //
    use HasFactory, SoftDeletes;
     protected $fillable = [
        'vehicule_id',
        'technicien_id',
        'date',
        'duree_main_oeuvre',
        'objet_reparation',
    ];
}
