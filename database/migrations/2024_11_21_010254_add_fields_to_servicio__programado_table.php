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
        Schema::table('servicio__programado', function (Blueprint $table) {
            $table->string('clave_serviciopgm');
            $table->string('fecha');
            $table->string('hora');
            $table->string('comentarios');
            $table->string('estatus');
            $table->string('id_CteDire');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicio__programado', function (Blueprint $table) {
            $table->dropColumn('clave_serviciopgm');
            $table->dropColumn('fecha');
            $table->dropColumn('hora');
            $table->dropColumn('comentarios');
            $table->dropColumn('estatus');
            $table->dropColumn('id_CteDire');
        });
    }
};
