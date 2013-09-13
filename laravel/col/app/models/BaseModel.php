<?php

use Illuminate\Support\MessageBag;

class BaseModel extends Eloquent {

	public $errors;

	public static function boot() {

		parent::boot();

		static::saving(function($model) {
			return $model->validate();
		});

		static::deleting(function($model) {
			return $model->RelationshipCheck();
		});
	}

	public function validate() {

		//o que estiver de string nulla, vou settar null para o banco de dados!
		$this->attributes = array_map(function($value){
			return strlen($value)==0 ? null : $value;
		}, $this->attributes);

		$validation = Validator::make($this->attributes, static::$rules);

		if ($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}


	public function RelationshipCheck() {

		if (!isset(static::$relationships)) return true;

		foreach(static::$relationships as $rel) {

			if (DB::table($rel['table'])->where($rel['field'], '=', $this->id)->first() != null) {

				$msg = new MessageBag;
				$msg->add($rel['table'], 'Existe vínculo na tabela "'.$rel['tableAlias'].'".');
				$this->errors = $msg;

				return false;
			}
			
		}

		return true;
	}
}
