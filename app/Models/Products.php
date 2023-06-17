<?php

namespace App\Models;

use App\Models\Villes;
use App\Models\Commandes;
use App\Models\Categories;
use App\Models\Fournisseurs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected  $table='product';
    protected $primaryKey='codePro';
    protected $fillable=['codePro','libellePro','qtestock','pu'];

    public function commandes()
    {
        return $this->belongsTo(Commandes::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseurs::class);
    }

    public function ville()
    {
        return $this->belongsTo(Villes::class);
    }

}
