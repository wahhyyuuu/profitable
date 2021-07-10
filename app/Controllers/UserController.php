<?php

namespace App\Controllers;

class UserController extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('user/u_index', $data);
	}

	public function biodata()
	{
        $data = [
            'title' => 'Dashboard'
        ];
		return view('user/biodata', $data);
	}
}
