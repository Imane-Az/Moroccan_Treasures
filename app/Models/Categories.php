<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected  $table='categories';
    protected $primaryKey='idCat';
    protected $fillable=['idCat','nomCat','PrenomFor','AdresseFor','telFor'];

    public function products()
{
    return $this->hasMany(Products::class);
}

}