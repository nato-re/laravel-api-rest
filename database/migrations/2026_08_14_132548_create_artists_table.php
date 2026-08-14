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
            $table->string('profile_picture')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWT9ttmpZziBp9RXonM86wEnGd1wQ_QJYaSBgmt7GF3GyUe-EmQNPk-xSz&s=10');
            $table->integer('start_year')->nullable();
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
