<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function studygroups() {
        return $this->hasManyThrough(
            Studygroup::class, // a kapcsolódó model
            Enrolling::class,  // a kapcsoló - pivot - model
            'student_id',      // a jelen model kulcsa a pivot modelben
            'id',              // a kapcsolódó model kulcsmezője
            'id',              // ezen model kulcsmezője
            'study_group_id'   // a kapcsolódó model kulcsa a pivot modelben
        );
    }

}
