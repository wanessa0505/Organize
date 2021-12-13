<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('tarefas_id');
            $table->text('descricao');
            $table->date('date');
            $table->time('time');
            $table->text('status');
            $table-> unsignedBigInteger('titulo_id');
            $table-> unsignedBigInteger('login_id');
            $table-> unsignedBigInteger('calendario_id');
            $table->timestamps();
         

            
            $table->foreign('login_id')
            ->references ('id')
            ->on('logins');

            $table->foreign('titulo_id')
            ->references ('id')
            ->on('titulos');
            
            $table->foreign('calendario_id')
            ->references ('id')
            ->on('calendarios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
