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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_photo')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg4RP3X8p3MPLW5edWewYuLgsnt2npuxHuXLKVNGEDEYx6DtlIvYuaNXk&s=10');
            $table->string('external_link')->nullable();
            $table->binary('song_sample')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
