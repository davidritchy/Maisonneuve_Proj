<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $primaryKey = 'etudiant_id';
   
    protected $fillable = ['nom','addresse','email','telephone','date_naissance','ville_id'];
}
