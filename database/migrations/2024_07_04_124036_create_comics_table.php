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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('thumb')->nullable(); // immagine opzionale
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->json('artists')->nullable(); // lista di artisti in formato JSON
            $table->json('writers')->nullable(); // lista di scrittori in formato JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};