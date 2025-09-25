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
        Schema::create('external_contacts', function (Blueprint $table) {
            $table->id('external_contact_id');
            $table-> unsignedBigInteger ('center_id');
            $table-> string ('type');
            $table-> string ('subject');
            $table-> string ('company');
            $table-> string ('contact_person');
            $table-> string ('phone');
            $table-> string ('email');
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
        Schema::dropIfExists('external_contacts');
    }
};
