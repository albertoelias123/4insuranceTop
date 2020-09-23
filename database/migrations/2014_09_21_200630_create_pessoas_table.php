<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('documento')->unique(); // CPF ou CNPJ
            $table->string('obs')->nullable();

            // Se for pessoa fisica
            $table->date('data_de_nascimento')->nullable();
            $table->string('estado_civil')->nullable();
            // Se for pessoa juridica
            $table->string('razao_social')->nullable();
            $table->string('nome_de_contato')->nullable();
            $table->string('telefone_de_contato')->nullable();

            //$table->unsignedBigInteger('endereco_id')->nullable();
            $table->foreignId('endereco_id')->nullable()->constrained()->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
