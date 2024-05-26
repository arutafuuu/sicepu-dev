<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->char('student_id', 6)->primary();
            $table->string('name');
            $table->enum('gender', ['lk', 'pr']);
            $table->char('class_id', 4)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email')->unique();
            $table->string('parent_name', 80)->nullable();
            $table->string('parent_phone', 15)->nullable();
            $table->string('parent_email', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
