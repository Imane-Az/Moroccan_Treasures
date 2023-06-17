<?php

namespace App\Models;

use App\Models\Villes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Restaurant extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(Villes::class);
    }
}
