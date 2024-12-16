<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Review extends BaseController
{

    protected $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }


    public function index(): string
    {
        $data = [
            'title' => 'Review dan Saran',
            'review' => $this->reviewModel->getReview()
        ];

        return view('client/review/reviews', $data);
    }

    public function review()
    {
        $data = [
            'title' => 'Review dan saran',
            'review' => $this->reviewModel->getReview()
        ];
        return view('client/review/review', $data);
    }
    public function save()
    {

        $this->reviewModel->save([
            'judul-review' => $this->request->getVar('judul-review'),
            'nama-review' => $this->request->getVar('nama-review'),
            'isi-review' => $this->request->getVar('isi-review'),
            'tanggal-review' => $this->request->getVar('tanggal-review')

        ]);

        session()->setFlashdata('pesan', 'Review berhasil ditambahkan');

        return redirect()->to('/reviews');
    }



}
