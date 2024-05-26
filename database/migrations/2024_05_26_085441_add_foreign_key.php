<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('class_id')->references('class_id')->on('classes');
            // $table->foreign('student_id')->references('userid')->on('users');

        });

        Schema::table('teachers', function (Blueprint $table) {
            // $table->foreign('teacher_id')->references('userid')->on('users');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
        });

        Schema::table('subjects', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
        });

        Schema::table('grades', function (Blueprint $table) {
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
        });

        Schema::table('attendances', function (Blueprint $table) {
            $table->foreign('student_id')->references('student_id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });

        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign(['student_id', 'subject_id']);
        });

        Schema::table('subjects', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['class_id', 'student_id']);
        });
    }
};
