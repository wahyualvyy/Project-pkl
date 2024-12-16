<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\ReviewModel;
use App\Models\MobilModel;
class Home extends BaseController
{

    protected $artikelModel;
    protected $reviewModel;
    protected $mobilModel;

    
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->reviewModel = new ReviewModel();
        $this->mobilModel = new MobilModel();
        helper('costum');
    }
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'artikel' => $this->artikelModel->getArtikels(),
            'review' => $this->reviewModel->getReview(),
            'mobil' => $this->mobilModel->getMobil()
        ];
        return view('client/dashboard',$data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang'
        ];
        
        return view('client/tentang',$data);
    }
}
