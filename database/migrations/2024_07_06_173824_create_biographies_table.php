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
        Schema::create('biographies', function (Blueprint $table) {
             $table->id();
            $table->longText('body');
            $table->foreignId('patriot_id')->references('id')->on('patriots')->onDelete('cascade');
            $table->foreignId('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('approved_by')->references('id')->on('users')->onDelete('cascade') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biographies');
    }
};
