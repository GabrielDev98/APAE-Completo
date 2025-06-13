<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notas_fiscais', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->date('data');
            $table->enum('tipo', ['entrada', 'saida']); // Corrigido: campo tipo como enum
            $table->string('cliente'); // usado como "cliente_fornecedor" no formulário
            $table->decimal('valor', 15, 2);
            $table->enum('status', ['processada', 'pendente', 'cancelada'])->default('pendente'); // Corrigido: campo status
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notas_fiscais');
    }
};
