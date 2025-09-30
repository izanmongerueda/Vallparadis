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
        Schema::create('uniform_renewals', function (Blueprint $table) {
            $table->id('renewal_id');
            $table-> unsignedBigInteger ('professional_id');
            $table-> date ('date');
            $table-> string ('delivered_by');
            $table-> string ('material');
            $table-> string ('file');
            $table-> string('carve');
            $table->timestamps();
            
            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uniform_renewals');
    }
};
