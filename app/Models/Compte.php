<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    /** @use HasFactory<\Database\Factories\ComptesSpecificFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'total',
        'ajouts_recent'
    ];

    public function get_comptes()
    {
        return $this->hasMany(Compte::class);
    }
}
