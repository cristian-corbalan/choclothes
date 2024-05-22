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
        Schema::create('tienda', function (Blueprint $table) {
            $table->id('catalogoId');
            $table->string('categoria');
            $table->string('modelo');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('codigo');
            $table->unsignedBigInteger('precio');
            $table->date('fechaEntrada');
            $table->timestamps('');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tienda');
    }
};

