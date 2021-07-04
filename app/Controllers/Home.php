<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function test()
	{
		return view('welcome_message');
	}
	public function test2()
	{
		return view('welcome_message');
	}
	public function conflict(){
		return view('welcome_message');
	}
	public function conflict3(){
		return view('welcome_message');
	}
}
