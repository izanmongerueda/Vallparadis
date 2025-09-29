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
        Schema::create('projects_assignments', function (Blueprint $table) {
            $table->id('project_assigment');
            $table-> unsignedBigInteger ('project_id');
            $table-> unsignedBigInteger ('professional_id');
            $table->timestamps();

            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_assignments');
    }
};
