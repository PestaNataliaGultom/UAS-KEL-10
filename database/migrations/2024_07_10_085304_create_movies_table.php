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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('title');
            $table->string('genre');
            $table->text('synopsis');
            $table->integer('duration'); // duration in minutes
            $table->string('director');
            $table->string('writer');
            $table->text('cast');
            $table->string('distributor');
            $table->string('trailer');
            $table->enum('playing', ['now', 'upcoming']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
