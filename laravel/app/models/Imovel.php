<?php

class Imovel extends BaseModel {

	protected $table = 'imoveis';

	protected $guarded = array();

	public static $rules = array(
		'inscricao' => 'required',
		'pessoa_id' => 'numeric'
	);


	// RELATIONSHIPS!!! (somehow you needed me!)
	public function pessoa() {

		return $this->belongsTo('Pessoa', 'pessoa_id');

	}


	// ****************** SCOPES ****************
	public function scopeListByPessoa($query, $pessoa_id) {
		$query->wherePessoaId($pessoa_id);
	}
}