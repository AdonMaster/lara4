<?php

class PessoasController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pessoas = Pessoa::all();

		//vou atachar soh o contador dos objetos... sem eagerloading pra salvar resources
		foreach ($pessoas as $pessoa) {
			$pessoa->empresasCount = Empresa::listByPessoa($pessoa->id)->count();
			$pessoa->imoveisCount = Imovel::listByPessoa($pessoa->id)->count();
		}

		return View::make('pessoas.index', compact('pessoas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pessoas.create');
	}


	/**
	 * 
	 *
	 * @return Response
	 */
	public function store()
	{
		$pessoa = new Pessoa(Input::all());

		if ($pessoa->save()) {
			return Redirect::route('pessoas.index');
		}

		return Redirect::back()->withInput()->withErrors($pessoa->errors);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pessoa = Pessoa::find($id);
		$empresas = $pessoa->empresas;
		$imoveis = $pessoa->imoveis;

		return View::make('pessoas.show', compact('pessoa', 'empresas', 'imoveis'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pessoa = Pessoa::find($id);
		return View::make('pessoas.edit', compact('pessoa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pessoa = Pessoa::find($id);

		if ($pessoa->update(Input::all())) {
			return Redirect::route('pessoas.show', $pessoa->id);
		}

		return Redirect::back()->withInput()->withErrors($pessoa->errors);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pessoa = Pessoa::find($id);

		if ($pessoa->delete()) {
			return Redirect::route('pessoas.index');
		}

		return Redirect::back()->withErrors($pessoa->errors);
	}


}