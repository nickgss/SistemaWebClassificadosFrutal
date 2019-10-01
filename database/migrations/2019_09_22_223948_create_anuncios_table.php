<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->bigInteger('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem');
            $table->enum('status',['vende','aluga','servico']);
            $table->string('endereco');
            $table->string('cep');
            $table->decimal('valor',20,2);           
            $table->string('detalhes');
            $table->text('mapa')->nullable();
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar',['sim','nao'])->default('nao');
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
        Schema::dropIfExists('anuncios');
    }
}
