<?php
namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class blogModel extends Model
{
    protected $table      = 'blog';
    protected $useTimestamps = true;
    protected $allowedFields=['judul','author','isi','updated_at','created_at'];

    public function getAdminBlog($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }
            return $this->where(['slug'=>$slug])->first();
    }
    // public function search($kunci)
    // {
    //    return $this->table('blog')->like('judul', $kunci);
    // }
}