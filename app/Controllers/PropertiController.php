<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;

class PropertiController extends BaseController
{
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "d58acb32de3bb67e7efaa6a1f30291b0";

	public function index()
	{
        $data = [
            'title' => 'Data Properti'
        ];
		return view('Admin/Properti/list_properti', $data);
	}

    public function addProperti()
    {
        $provinsi = $this->daerahIndonesia('province');
        $data = [
            'title' => 'Tambah Properti',
            'provinsi'  =>  json_decode($provinsi)->rajaongkir->results
        ];
        return view('Admin/Properti/add_properti', $data);
    }

    public function getCity()
    {
        if($this->request->isAJAX())
        {
            $id_provinsi = $this->request->getGet('id_provinsi');
            $data = $this->daerahIndonesia('city', $id_provinsi);
            return $this->response->setJSON($data);
        }
    }

    private function daerahIndonesia($method, $id_provinsi=null)
    {
        $endPoint = $this->url.$method;

        if($id_provinsi!=null)
        {
            $endPoint = $endPoint."?province=".$id_provinsi;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "key: ".$this->apiKey
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }
}