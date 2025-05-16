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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->string('cover_photo')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

    }
};
