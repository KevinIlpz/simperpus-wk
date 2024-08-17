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
            $table->string('title', 255);
            $table->string('author', 255);
            $table->string('publisher', 255);
            $table->unsignedBigInteger('rack_id');
            $table->year('release_date');
            $table->string('ISBN', 20);
            $table->integer('stock');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('rack_id')->references('id')->on('racks')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('racks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};