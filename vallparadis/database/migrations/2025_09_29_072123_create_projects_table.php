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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table-> unsignedBigInteger ('center_id');
            $table-> string ('type');
            $table-> string ('name');
            $table-> date ('start_date');
            $table-> string ('manager');
            $table-> text ('description');
            $table-> text ('notes');
            $table-> string ('file');
            $table->timestamps();
            
            $table->foreign('center_id')->references('center_id')->on('centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
