<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endroits extends Model
{
    use HasFactory;
    protected  $table='endroits';
    protected $primaryKey='idE';
    protected $fillable=['idE','nomEndroit'];
}