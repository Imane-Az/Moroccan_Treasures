<?php

namespace App\Models;

use App\Models\Villes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;
    protected  $table='activites';
    protected $primaryKey='idA';
    protected $fillable = ['idA','Type', 'Titre', 'Prix', 'Information','image', 'ville_id'];

    public function ville()
    {
        return $this->belongsTo(Villes::class,'idV');
    }
}
