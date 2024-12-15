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
        Schema::table('servicio', function (Blueprint $table) {
            $table->string('Folio');
            $table->string('fecha');
            $table->string('hora');
            $table->string('comentarios');
            $table->string('num_Economico');
            $table->string('id_CteDire');
            $table->string('id_Unidad');
            $table->string('Unidad_Municipio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicio', function (Blueprint $table) {
            $table->dropColumn('Folio');
            $table->dropColumn('fecha');
            $table->dropColumn('hora');
            $table->dropColumn('comentarios');
            $table->dropColumn('num_Economico');
            $table->dropColumn('id_CteDire');
            $table->dropColumn('id_Unidad');
            $table->dropColumn('unidad_Municipio');
        });
    }
};
