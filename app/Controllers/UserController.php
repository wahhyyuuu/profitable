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

	public function riwayat_tu()
	{
        $data = [
            'title' => 'Transaksi'
        ];
		return view('user/u_riwayat_trans', $data);
	}
}
