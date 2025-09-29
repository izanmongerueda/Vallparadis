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
        Schema::create('managment_documents', function (Blueprint $table) {
            $table->id('managment_document_id');
            $table->unsignedBigInteger ('center_id');
            $table-> string ('type');
            $table-> date ('date');
            $table-> text ('description');
            $table-> string ('responsible');
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
        Schema::dropIfExists('managment_documents');
    }
};
