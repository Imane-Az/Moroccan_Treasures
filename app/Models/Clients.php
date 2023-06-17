<?php

namespace App\Models;

use App\Models\User;
use App\Models\Commandes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model
{
    use HasFactory;
    protected  $table='clients';
    protected $primaryKey='Cin';
    protected $fillable=['Cin','NomClt','PrenomClt','AdresseClt','telClt','Password','emailClt','typeClt'];
    
    public function commandes()
    {
        return $this->hasMany(Commandes::class,'Cin');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
