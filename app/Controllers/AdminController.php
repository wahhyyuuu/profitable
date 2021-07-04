<?php

namespace App\Controllers;

class AdminController extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('Admin/index', $data);
	}
}
