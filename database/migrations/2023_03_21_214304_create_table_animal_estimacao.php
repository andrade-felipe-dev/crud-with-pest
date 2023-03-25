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
        Schema::create('animal_estimacao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->integer('idade');
            $table->string('especie');
            $table->string('raca');
            $table->enum('sexo', ['macho', 'femea']);
            $table->float('peso');
            $table->foreignId('id_tutor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_estimacao');
    }
};
