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
        Schema::create('hr_pending_issues', function (Blueprint $table) {
            $table->id('issue_id');
            $table-> unsignedBigInteger ('center_id');
            $table-> date ('open_date');
            $table-> unsignedBigInteger ('affected_professional');
            $table-> text ('description');
            $table-> unsignedBigInteger ('registered_by');
            $table-> string ('assigned_by');
            $table-> string ('file');
            $table->timestamps();
            
            $table->foreign('center_id')->references('center_id')->on('centers')->onDelete('cascade');
            $table->foreign('affected_professional')->references('professional_id')->on('professionals')->onDelete('cascade');
            $table->foreign('registered_by')->references('professional_id')->on('professionals')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_pending_issues');
    }
};
