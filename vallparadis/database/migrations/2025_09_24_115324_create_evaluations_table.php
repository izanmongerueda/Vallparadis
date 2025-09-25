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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('evaluation_id');
            $table-> unsignedBigInteger ('professional_id');
            $table-> unsignedBigInteger ('evaluator_id');
            $table-> date ('date');
            $table-> integer ('score');
            $table-> text ('notes');
            $table-> string ('files');
            $table->timestamps();
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
            $table->foreign('evaluator_id')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
