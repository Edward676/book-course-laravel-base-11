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
        Schema::create('unidad', function (Blueprint $table) {
            $table->id('id_Unidad'); // Llave primaria
            $table->string('num_Economico', 20);
            $table->unsignedBigInteger('clave_Operador'); // Llave foránea a `lista_Operadores`
            $table->unsignedBigInteger('clave_Duenio'); // Llave foránea a `lista_Duenio`
            $table->unsignedBigInteger('id_Municipio'); // Llave foránea a `Municipio`
        
            // Llaves foráneas
            $table->foreign('clave_Operador')->references('clave_Operador')->on('lista__operadores')->onDelete('cascade');
            $table->foreign('clave_Duenio')->references('clave_Duenio')->on('lista__duenio')->onDelete('cascade');
       
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad');
    }
};
