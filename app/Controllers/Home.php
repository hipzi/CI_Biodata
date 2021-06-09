<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function profile()
	{
		return view('biodata/profile');
	}

	public function education()
	{
		return view('biodata/education');
	}

	public function tourist()
	{
		return view('biodata/tourist');
	}
}
