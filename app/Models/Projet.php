<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Database\Factories\ProjetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    /** @use HasFactory<ProjetFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

}


