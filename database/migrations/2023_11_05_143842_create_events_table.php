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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventDate');
            $table->string('header');
            $table->string('title');
            $table->string('dayDigit');
            $table->string('dayName');
            $table->string('houreDigit');
            $table->string('houreName');
            $table->string('minDigit');
            $table->string('minName');
            $table->string('secDigit');
            $table->string('secName');
            $table->string('image')->default('default.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
