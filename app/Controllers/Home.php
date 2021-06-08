<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function profile()
	{
		return view('profile');
	}

	public function education()
	{
		return view('education');
	}

	public function tourist()
	{
		return view('tourist');
	}

	public function button_education()
	{
		return redirect()->to('education');
	}

	// public function tourist()
	// {
	// 	return view('tourist');
	// }

	// public function tourist()
	// {
	// 	return view('tourist');
	// }
}
