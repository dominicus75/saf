<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studygroup extends Model
{
    use HasFactory;

    public function students() {
        return $this->hasManyThrough(
            Student::class,    // a kapcsolódó model
            Enrolling::class,  // a kapcsoló - pivot - model
            'study_group_id',  // a jelen model kulcsa a pivot modelben
            'id',              // a kapcsolódó model kulcsmezője
            'id',              // ezen model kulcsmezője
            'student_id'       // a kapcsolódó model kulcsa a pivot modelben
        );
    }

}
