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
        Schema::create('course_assigments', function (Blueprint $table) {
            $table->id('assigment_id');
            $table-> unsignedBigInteger ('course_id');
            $table-> unsignedBigInteger ('professional_id');
            $table->timestamps();
            
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_assigments');
    }
};
