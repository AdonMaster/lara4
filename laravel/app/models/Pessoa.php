<?php

class Pessoa extends BaseModel {

	protected $guarded = array(); //black list
	// protected $fillable = array('nome', 'cpfcnpj'); //white list

	public static $rules = array(
		'nome' => 'required',
		'cpfcnpj' => 'required',
	);

	public static $relationships = array(
		array('table'=>'empresas', 'tableAlias'=>'Empresa', 'field'=>'pessoa_id'),
		array('table'=>'imoveis', 'tableAlias'=>'Imóvel', 'field'=>'pessoa_id')
	);

// ************** RELATIONSHIPS! **************
	public function empresas() {
		return $this->hasMany('Empresa', 'pessoa_id');
	}

	public function imoveis() {
		return $this->hasMany('Imovel', 'pessoa_id');
	}


	public function empresasCount($pessoa_id) {
		return Empresa::where('pessoa_id', '=', $pessoa_id)->count();
	}


}