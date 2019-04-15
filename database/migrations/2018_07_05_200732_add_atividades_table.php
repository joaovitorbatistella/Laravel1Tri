<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('title');            //título da atividade
            $table->string('description');      //descrição da atividade
            $table->dateTime('scheduledto');    //agendado para
            $table->timestamps();               //registro created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atividades', function (Blueprint $table) {
            //
        });
    }
}
