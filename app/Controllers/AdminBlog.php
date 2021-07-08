<?php

namespace App\Controllers;
use App\Models\blogModel;
use Config\Validation;

class AdminBlog extends BaseController
{
	public function __construct()
    {
        $this->blogModel = new BlogModel();
    }
	public function index()
	{
		$data=[
            'title'=>"Blog Management",
    	    'adminblog'=>$this->BlogModel->getAdminBlog()
        ];
        return view('Admin/viewBlog',$data);
	}
    public function add()
	{
		$data=[
			'title'=>'Form Tambah Data Artikel',
			'validation'=>\Config\Services::validation()
			];
			return view('Admin/addBlog',$data);
	}
    public function save()
	{
		if(!$this->validate(
			[
				'judul'=>[
					'rules'=>'required|is_unique[blog.judul]',
					'errors'=>[
						'required'=>'{field} Blog Tidak Boleh Kosong.',
						'is_unique'=>'{field} Blog Tidak Boleh Sama'
					]
	
					],
					'gambar'=>[
						'rules'=>'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
						'errors'=>
							[
								'uploaded'=> 'pilih gambar terlebih dahulu',
								'max_size'=> 'ukuran gambar terlalu besar',
								'is_image'=> 'file anda bukan gambar',
								'mime_in'=> 'file anda bukan gambar'
							]
						]
			]
			))
			{
				// $validation =\Config\Services::validation();
				// return redirect()->to('/artikel/tambah')->withInput()->with('validation',$validation);
				return redirect()->to('/addBlog')->withInput();
			}
			$filegambar=$this->request->getFile('gambar');
			if($filegambar->getError()==4){
				$namagambar='team-1.jpg';
			}
			else{
			$namagambar=$filegambar->getRandomName();
			$filegambar->move('template/assets/img/',$namagambar);
			}
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
