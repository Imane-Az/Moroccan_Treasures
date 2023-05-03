<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
    protected  $table='commandes';
    protected $primaryKey='NumCom';
    protected $fillable=['NumCom','DateComm','PrenomFor','AdresseFor','telFor'];
}