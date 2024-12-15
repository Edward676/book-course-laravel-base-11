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
        Schema::table('direcciones__cliente', function (Blueprint $table) {
            $table->string('id_Direccion');
            $table->string('telefono');
            $table->string('id_CteDire');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('direcciones__cliente', function (Blueprint $table) {
            $table->dropColumn('id_Direccion');
            $table->dropColumn('telefono');
            $table->dropColumn('id_CteDire');
        });
    }
};
