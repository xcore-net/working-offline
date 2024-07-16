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
        Schema::create('students_courses', function (Blueprint $table) { 
            $table->id(); 

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade'); 
 
            $table->unsignedBigInteger('course_id'); 
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); 

            $table->date('enrollment_date'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_course');
    }
};
