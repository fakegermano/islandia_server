<?php

class ByLawController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bylaw
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Post::orderBy('id')->get();

		return View::make('list')->withItems($items);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bylaw/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if ((Auth::user()) && (Auth::user()->category()->first()->title = "Administradores"))
			return View::make('posts.create');
	}

	/**
	 * Display the specified resource.
	 * GET /bylaw/{id}
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Post::find($id);

		if (isset($item))
            return View::make('post')->with(['item' => $item]);

		return "ERRO";
	}

}
