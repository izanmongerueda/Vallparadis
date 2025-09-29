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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table -> string ('email');
            $table -> string ('password');
            $table -> unsignedBigInteger ('professional_id')->nullable();
            $table -> string ('role');
            $table -> string ('status');
            $table -> dateTime ('last_login');
            $table->timestamps();

            $table->foreign('professional_id')->references('professional_id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
