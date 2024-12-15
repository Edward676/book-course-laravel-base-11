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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha');
            $table->decimal('precio', 8, 2);
            $table->foreignId('conductor_id')->constrained('conductors')->onDelete('cascade');
            $table->foreignId('taxi_id')->constrained('taxis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
