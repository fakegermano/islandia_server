<?php
use Illuminate\Support\Facades\Input;

/**
 * Class HomeController
 */
class HomeController extends BaseController {

	public function showHome()
	{
		return View::make('home');
	}
}
