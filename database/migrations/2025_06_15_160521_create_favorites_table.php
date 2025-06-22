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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id('FavoriteID');
            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('UniversityID')->constrained('universities', 'UniversityID')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['UserID', 'UniversityID'], 'user_university_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};