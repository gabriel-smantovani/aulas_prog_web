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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 7)->unique();
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->integer('ano')->unsigned()->checkBetween(1900, 2025);
            $table->string('cor', 30);
            $table->float('valor');
            $table->integer('alugado')->unsigned()->checkBetween(0, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
