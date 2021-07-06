<?php

namespace App\Controllers;

class AdminBlog extends BaseController
{
	public function index()
	{
		$data=[
            'title'=>"Blog Management",
    	//    'adminblog'=>$this->blogModel->getAdminBlog()
        ];
        return view('Admin/viewBlog',$data);
	}
    public function add()
	{
		return view('welcome_message');
	}
    public function save()
	{
		return view('welcome_message');
	}
    public function edit()
	{
		return view('welcome_message');
	}
    public function delete()
	{
		return view('welcome_message');
	}
}
