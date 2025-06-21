<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id('ContactID');
            $table->foreignId('MajorID')->constrained('majors', 'MajorID')->onDelete('cascade');
            $table->foreignId('UniversityID')->constrained('universities', 'UniversityID')->onDelete('cascade');
            $table->text('Description');
            $table->foreignId('UserID')->constrained('users', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_u_s');
    }
};
