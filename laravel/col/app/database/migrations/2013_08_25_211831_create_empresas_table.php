<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas', function(Blueprint $table) {
			$table->increments('id');

			$table->integer('pessoa_id')->unsigned()->nullable();
			$table->foreign('pessoa_id')->references('id')->on('pessoas');

			$table->string('nome_fantasia');
			$table->string('inscricao');
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
		Schema::drop('empresas');
	}

}
