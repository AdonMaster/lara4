<?php

class PessoasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pessoas')->delete();

		$pessoas = 	array(
						array(
							'nome'=>'Adonio', 
							'cpfcnpj'=>'00280263147', 
							'updated_at' => new DateTime, 
							'created_at' => new DateTime
						), 
						array(
							'nome'=>'Getulino', 
							'cpfcnpj'=>'11122233344', 
							'updated_at' => new DateTime, 
							'created_at' => new DateTime
						)
					);

		DB::table('pessoas')->insert($pessoas);
	}

}
