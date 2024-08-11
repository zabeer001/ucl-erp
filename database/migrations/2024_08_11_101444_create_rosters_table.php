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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->time('saturday_start_time');
            $table->time('saturday_end_time');
            $table->time('sunday_start_time');
            $table->time('sunday_end_time');
            $table->time('monday_start_time');
            $table->time('monday_end_time');
            $table->time('tuesday_start_time');
            $table->time('tuesday_end_time');
            $table->time('wednesday_start_time');
            $table->time('wednesday_end_time');
            $table->time('thursday_start_time');
            $table->time('thursday_end_time');
            $table->time('friday_start_time');
            $table->time('friday_end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
