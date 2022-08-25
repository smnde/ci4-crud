<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
		$data['title'] = 'Home';
        return view('layouts/header', $data)
			. view('layouts/navbar')
			. view('home')
			. view('layouts/footer');
    }
}
