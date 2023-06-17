<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseurs extends Model
{
    use HasFactory;
    protected  $table='fournisseurs';
    protected $primaryKey='idFor';
    protected $fillable=['idFor','NomFor','PrenomFor','AdresseFor','telFor'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}