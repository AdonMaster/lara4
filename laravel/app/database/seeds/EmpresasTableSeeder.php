<?php

class EmpresasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('empresas')->delete();

		$empresas = array(
			array(
				'pessoa_id' => 1,
				'nome_fantasia' => 'Agroprado Agricola',
				'inscricao' => '00288',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
			array(
				'pessoa_id' => 1,
				'nome_fantasia' => 'Checropina Bar',
				'inscricao' => '00289',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			)
		);

		DB::table('empresas')->insert($empresas);
	}

}
