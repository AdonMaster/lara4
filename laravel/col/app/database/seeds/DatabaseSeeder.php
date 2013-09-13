<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PessoasTableSeeder');
		$this->call('EmpresasTableSeeder');
		$this->call('ImoveisTableSeeder');
	}

}