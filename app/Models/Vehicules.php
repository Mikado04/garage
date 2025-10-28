<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicules extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $fillable = [
    'immatriculation',
    'marque',
    'modele',
    'couleur',
    'annee',
    'kilometrage',
    'carrosserie',
    'energie',
    'boite',
];
}
