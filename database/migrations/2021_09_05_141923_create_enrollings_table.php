<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
        });

        Schema::table('enrollings', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('stgroup_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('stgroup_id')->references('id')->on('studygroups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollings');
    }
}
