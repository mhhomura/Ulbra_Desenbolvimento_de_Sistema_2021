<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContratacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratacaos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('descrico', 255)->nullable();
            $table->integer('servico_id')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->integer('status')->nullable();
            $table->integer('status_pagamento')->nullable();
            $table->string('id_pagamento', 255)->nullable();
            $table->timestamp('date_agendada')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratacaos');
    }
}
