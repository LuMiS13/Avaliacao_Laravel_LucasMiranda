<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaContratos extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_contrato');
            $table->string('envolvido_1');
            $table->string('envolvido_2');
            $table->string('data_contrato');
            $table->float('valor');
            $table->string('nome_tabeliao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
