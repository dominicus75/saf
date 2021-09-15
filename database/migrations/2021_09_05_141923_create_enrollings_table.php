<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;
use App\Models\StudyGroup;

class CreateEnrollingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollings', function (Blueprint $table) {
            $table->foreignIdFor(Student::class);
            $table->foreignIdFor(StudyGroup::class);
            $table->primary(['student_id', 'study_group_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrollings', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['study_group_id']);
        });
        Schema::dropIfExists('enrollings');
    }
}
