<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studygroup extends Model
{
    use HasFactory;

    public function students() {
        return $this->belongsToMany(
            Student::class,   // a kapcsolódó model
            'enrollings',     // a kapcsoló - pivot - tábla
            'study_group_id', // a jelen model kulcsa a pivot modelben
            'student_id'      // a kapcsolódó model kulcsa a pivot modelben
        );
    }

}
