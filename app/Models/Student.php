<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The study groups that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function studygroups() {
        return $this->belongsToMany(
            StudyGroup::class,
            'enrollings',
            'student_id',
            'study_group_id',
            Student::class
        );
    }

}
