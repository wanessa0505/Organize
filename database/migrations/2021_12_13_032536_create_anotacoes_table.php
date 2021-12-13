<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacoes', function (Blueprint $table) {
            $table->increments('anotacao_id');
            $table-> text('descricao');
            $table-> unsignedBigInteger('login_id');
            $table-> unsignedBigInteger('titulo_id');

            $table->timestamps();

            $table->foreign('login_id')
            ->references ('id')
            ->on('logins');

            $table->foreign('titulo_id')
            ->references ('id')
            ->on('titulos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anotacoes');
    }
}
