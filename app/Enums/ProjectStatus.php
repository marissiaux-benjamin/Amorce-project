<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case Eligible = 'éligible';
    case NoStatus = 'Pas défini';
    case NoEligible = 'non éligible';
}
