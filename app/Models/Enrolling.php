<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Enrolling extends Model
{
    use HasFactory;

    public function studentsBelongsToGroups(array $groups) {

    }
}
