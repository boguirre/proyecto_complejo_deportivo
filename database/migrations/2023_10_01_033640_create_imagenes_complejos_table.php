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
        Schema::create('imagenes_complejos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_complejo')->nullable();
            $table->text('url');
            $table->foreign('id_complejo')->references('id')->on('complejo_deportivos')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes_complejos');
    }
};
