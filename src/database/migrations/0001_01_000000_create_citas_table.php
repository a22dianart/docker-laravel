<?php

// database/migrations/2024_01_01_000001_create_citas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('users')->onDelete('cascade');
            $table->string('marca');
            $table->string('modelo');
            $table->string('matricula');
            $table->date('fecha')->nullable(); // Inicialmente puede ser null
            $table->time('hora')->nullable();
            $table->integer('duracion_estimada')->nullable(); // En minutos
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('citas');
    }
};

