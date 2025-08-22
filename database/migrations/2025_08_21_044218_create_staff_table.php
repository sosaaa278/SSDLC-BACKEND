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
    Schema::create('staff', function (Blueprint $table) {
        $table->id();
        $table->string('name');              // nombre completo
        $table->string('email')->unique();   // correo electrónico único
        $table->string('position');          // puesto
        $table->string('department');        // departamento
        $table->timestamps();                // created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
