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
        Schema::create('cardboard', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('author', 30);
            $table->string('company', 30);
            $table->longText('description');
            $table->tinyText('price');
            $table->Date('release_date');
            $table->string('age_range', 5);
            $table->string('genre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardboard');
    }
};
