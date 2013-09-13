<?php

class EmpresasController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empresas = Empresa::with('pessoa')->get();
		return View::make('empresas.index', compact('empresas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('empresas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$empresa = new Empresa(Input::all());

		if ($empresa->save()) {
			return Redirect::route('empresas.index');
		}

		return Redirect::back()->withInput()->withErrors($empresa->errors);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$empresa = Empresa::with('pessoa')->find($id);

		return View::make('empresas.show', compact('empresa'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empresa = Empresa::find($id);

		return View::make('empresas.edit', compact('empresa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$empresa = Empresa::find($id);

		if ($empresa->update(Input::all())) {
			return Redirect::route('empresas.show', $empresa->id);
		}

		return Redirect::back()->withInput()->withErrors($empresa->errors);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$empresa = Empresa::find($id);

		if ($empresa->delete()) {
			return Redirect::route('empresas.index');
		}
		
		return Redirect::back()->withInput()->withErrors($empresa->errors);
	}

}