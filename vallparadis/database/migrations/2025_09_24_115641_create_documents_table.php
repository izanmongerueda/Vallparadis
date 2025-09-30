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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('document_id');
            $table-> unsignedBigInteger ('professional_id');
            $table-> unsignedBigInteger ('project_id');
            $table-> string ('type');
            $table-> date ('date');
            $table-> string ('file_name');
            $table-> string ('file');
            $table->timestamps();
            
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
