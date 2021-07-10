<?php

namespace App\Controllers;

use App\Models\PropertiModel;

class AdminController extends BaseController
{
	
	public function index()
	{
		$this->PropertiModel = new PropertiModel();
        $data = [
            'title' => 'Dashboard',
			'jumlahProperti' => $this->PropertiModel->countAll()
        ];
		return view('Admin/index', $data);
	}
}
