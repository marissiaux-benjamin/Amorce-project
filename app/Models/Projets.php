<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Database\Factories\ProjetsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    /** @use HasFactory<ProjetsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    public static function getStatuses(): array
    {
        return array_map(fn($status) => $status->value, ProjectStatus::cases());
    }

    public function changeStatus(ProjectStatus $newStatus): void
    {
        // Utilisez $newStatus->value pour obtenir la valeur de l'énumération (une chaîne)
        $this->status = $newStatus->value;  // Cette ligne attribue la chaîne au champ 'status'
        $this->save();
    }

}


