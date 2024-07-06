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
        Schema::table('patriots', function (Blueprint $table) {
            $table->date('date_of_death');
            $table->string('cause_of_death');
            $table->string('gender');
            $table->string('place_of_death');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patriots', function (Blueprint $table) {
            Schema::dropColumns('date_of_death','cause_of_death','gender','place_of_death');
        });
    }
};
