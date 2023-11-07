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
        Schema::create('table_cards_games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->Integer('price');
            $table->integer('player');
            $table->string('type');
            $table->string('date_sale');
            $table->string('language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cards_games');
    }
};
