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
            $table->string('profile_picture')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLeXrLHdfEVea1AOvU7Fg48C1kWUASwwyXYRt_4Fpuaw&s');
            $table->binary('sample_song')->nullable();
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
