<?php

namespace App\Controllers;

use App\Models\MobilModel;
use App\Models\BeliModel;

class Shops extends BaseController
{
    protected $mobilModel;
    protected $beliModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
        $this->beliModel = new BeliModel();
    }

    public function index(): string
    {
        $mobilToyota = $this->mobilModel->getMerek('Toyota');
        $mobilMercedes = $this->mobilModel->getMerek('Mercedes');
        $mobilBmw = $this->mobilModel->getMerek('BMW');

        $data = [
            'title' => 'Shop',
            'mobil' => $this->mobilModel->getMobil(),
            'toyota' => $mobilToyota,
            'mercedes' => $mobilMercedes,
            'bmw' => $mobilBmw
        ];

        return view('/client/shop/shops', $data);
    }

    public function shop($id)
    {
       


        $data = [
            'title' => 'Data',
            'mobil' => $this->mobilModel->getMobil($id)
            
        ];

        return view('/client/shop/shop', $data);
    }

    public function save()
    {
        $nama = ucwords($this->request->getVar('nama'));
        $getId = $this->request->getVar('id');

        $this->beliModel->save([
            'nama' => $nama,
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'nama-mobil' => $this->request->getVar('nama-mobil'),
            'merek-mobil' => $this->request->getVar('merek-mobil'),
            'jenis-mobil' => $this->request->getVar('jenis-mobil')
        ]);

        session()->setFlashdata('pesan', 'Pesanan Berhasil di buat');
        return redirect()->to('/shops/shop/' . $getId);

    }
}
