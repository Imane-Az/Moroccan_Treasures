<?php

namespace App\Models;

use App\Models\Clients;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commandes extends Model
{
    use HasFactory;
    protected  $table='commandes';
    protected $primaryKey='NumCom';
    protected $fillable=['NumCom','DateComm','PrenomFor','AdresseFor','telFor'];

    public function client()
    {
         return $this->belongsTo(Clients::class, "Cin");
    }

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}