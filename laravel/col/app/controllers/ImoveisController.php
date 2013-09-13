<?php

class ImoveisController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$imoveis = Imovel::with('pessoa')->get();

		return View::make('imoveis.index', compact('imoveis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('imoveis.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$imovel = new Imovel(Input::all());

		if ($imovel->save()) {
			return Redirect::route('imoveis.index');
		}

		return Redirect::back()->withInput()->withErrors($imovel->errors);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$imovel = Imovel::with('pessoa')->find($id);

		return View::make('imoveis.show', compact('imovel'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$imovel = Imovel::find($id);

		return View::make('imoveis.edit', compact('imovel'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$imovel = Imovel::find($id);

		if ($imovel->update(Input::all())) {
			return Redirect::route('imoveis.show', $imovel->id);
		}

		return Redirect::back()->withInput()->withErrors($imovel->errors);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$imovel = Imovel::find($id);

		if ($imovel->delete()) {
			return Redirect::route('imoveis.index');
		}

		return Redirect::back()->withErrors($imovel->errors);
	}

}