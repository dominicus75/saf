<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyGroup extends Model
{
    use HasFactory;

    /**
     * The Students that belong to the study group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students() {
        return $this->belongsToMany(
            Student::class,
            'enrollings',
            'study_group_id',
            'student_id',
            StudyGroup::class
        );
    }

}
