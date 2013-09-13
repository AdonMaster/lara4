<?php

class Empresa extends BaseModel {

	protected $guarded = array();

	public static $rules = array(
		'nome_fantasia' => 'required|min:5',
		'pessoa_id' => 'numeric',
		'inscricao' => array('required', 'min:2')
	);

	// ****************** RELATIONSHIPS ****************	
	public function pessoa() {
		return $this->belongsTo('Pessoa', 'pessoa_id');
	}

	// ****************** SCOPES ****************
	public function scopeListByPessoa($query, $pessoa_id) {
		$query->wherePessoaId($pessoa_id);
	}

}