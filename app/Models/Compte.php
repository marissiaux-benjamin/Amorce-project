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
        'description',
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
