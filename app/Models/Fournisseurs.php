<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    use HasFactory;
    protected  $table='fournisseurs';
    protected $primaryKey='idFor';
    protected $fillable=['idFor','NomFor','PrenomFor','AdresseFor','telFor'];
}