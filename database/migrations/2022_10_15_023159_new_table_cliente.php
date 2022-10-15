<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewTableCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_clientes', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->date('DataHoraCadastro')->nullable();
            $table->string('Codigo',15)->nullable();
            $table->string('Nome',150)->nullable();
            $table->string('CPF_CNPJ',20)->nullable();
            $table->integer('CEP')->nullable();
            $table->string('Logradouro',100)->nullable();
            $table->string('Endereco',120)->nullable();
            $table->string('Numero',20)->nullable();
            $table->string('Bairro',50)->nullable();
            $table->string('Cidade',60)->nullable();
            $table->string('UF',2)->nullable();
            $table->string('Complemento',150)->nullable();
            $table->string('Fone',20)->nullable();
            $table->float('LimiteCredito')->nullable();
            $table->date('Validade')->nullable();
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
        Schema::dropIfExists('cadastro_clientes');
    }
}
