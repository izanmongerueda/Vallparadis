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
        Schema::create('general_services', function (Blueprint $table) {
            $table->id('service_id');
            $table-> unsignedBigInteger ('center_id');
            $table-> string ('type');
            $table-> string ('manager');
            $table-> string ('contract');
            $table-> text ('notes');
            $table->timestamps();

            $table->foreign('center_id')->references('center_id')->on('centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_services');
    }
};
