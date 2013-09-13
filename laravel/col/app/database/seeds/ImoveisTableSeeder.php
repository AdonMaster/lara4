<?php

class ImoveisTableSeeder extends Seeder {

	public function run()
	{
		DB::table('imoveis')->delete();

		$imoveis = array(
			array(
				'pessoa_id'=>'1', 
				'inscricao'=>'1020',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array(
				'pessoa_id'=>'1', 
				'inscricao'=>'1021',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);

		DB::table('imoveis')->insert($imoveis);
	}

}
