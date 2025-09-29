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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id('professional_id');
            $table-> unsignedBigInteger ('center_id');
            $table-> string ('first_name');
            $table-> string ('last_name');
            $table-> string ('phone');
            $table-> string ('email');
            $table-> string ('adress');
            $table-> string ('employments_status');
            $table->timestamps();
            
            $table->foreign('center_id')->references('center_id')->on('centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
