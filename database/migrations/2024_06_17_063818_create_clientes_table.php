<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('cpf',20);
            $table->date('data_nascimento');
            $table->string('cep',20);
            $table->string('logradouro',100);
            $table->string('numero',30);
            $table->string('bairro',50);
            $table->string('cidade',50);
            $table->string('estado',50);
            $table->string('complemento');
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
        Schema::dropIfExists('clientes');
    }
}
