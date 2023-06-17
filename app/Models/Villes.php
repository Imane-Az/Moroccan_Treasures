<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Activity;
use App\Models\Products;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Villes extends Model
{
    use HasFactory;
    protected $primaryKey='idV';
    protected $fillable=['idV','nomVille','image','description'];

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class,'ville_id');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class,'ville_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class,'ville_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class,'ville_id');
    }
}
