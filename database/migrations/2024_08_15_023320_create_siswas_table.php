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
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('MemberID');
            $table->string('Nama');
            $table->string('NIS')->unique();
            $table->enum('role', ['siswa', 'staff']);
            $table->string('Password');
            $table->string('Rayon_id')->nullable();
            $table->string('Rombel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
