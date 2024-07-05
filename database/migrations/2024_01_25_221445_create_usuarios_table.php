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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('nombre');
            $table->longText('email');
            $table->date('fecha_nacimeinto');
            $table->longText("password");
            $table->integer("status");
            $table->longText("telefono");
            $table->longText("numero_documento")->nullable();
            $table->integer("tipo_documentacion_id");
            $table->foreign('tipo_documentacion_id')->references('id')->on('tipo_documentacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
