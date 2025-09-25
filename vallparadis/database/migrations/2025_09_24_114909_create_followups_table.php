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
        Schema::create('followups', function (Blueprint $table) {
            $table->id('followup');
            $table-> unsignedBigInteger ('professional_id');
            $table-> string ('type');
            $table-> date ('date');
            $table-> string ('subject');
            $table-> text ('comment');
            $table-> string ('created_by');
            $table-> unsignedBigInteger ('professional_id');
            $table->timestamps();
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
            $table->foreign('created_by')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followups');
    }
};
