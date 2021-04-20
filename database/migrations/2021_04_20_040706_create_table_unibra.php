<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUnibra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unibra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('situacao');
            $table->string('numero_do_cnpj');
            $table->string('razao_social');
            $table->string('nome');
            $table->date('data_de_abertura');
            $table->string('capital_social');
            $table->string('tipo');
            $table->string('natureza_juridica');
            $table->string('porte_da_empresa');
            $table->string('qnt_de_funcionarios');
            $table->string('faturamento_presumido');
            $table->string('telefone');
            $table->string('email');
            $table->string('estado_uf');
            $table->string('municipio');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('cep');
            $table->string('atividade_economica');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unibra');
    }
}
