<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;



class Student extends Model
{
    use HasFactory;

    public function studygroups() {
        return $this->belongsToMany(
            Studygroup::class, // a kapcsolódó model
            'enrollings',      // a kapcsoló - pivot - tábla
            'student_id',      // a jelen model kulcsa a pivot modelben
            'study_group_id'   // a kapcsolódó model kulcsa a pivot modelben
        );
    }

}
