<?php

namespace App\Controllers;

use App\Models\BeliModel;
use App\Models\MobilModel;
use App\Models\ReviewModel;
use App\Models\ArtikelModel;
use App\Controllers\BaseController;
use Myth\Auth\Config\Services;

class Admin extends BaseController
{
    protected $beliModel;
    protected $artikelModel;
    protected $reviewModel;
    protected $mobilModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->reviewModel = new ReviewModel();
        $this->mobilModel = new MobilModel();
        $this->beliModel = new BeliModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login Admin'
        ];

        return view('admin/login', $data);
    }

    public function chart()
    {
        $data = [
            'title' => 'Grafik Penjualan Mobil'
        ];

        return view('admin/data/chart-mobil', $data);
    }

    public function table()
    {
        $data = [
            'title' => 'Table Data Penjualan',
            'mobil' => $this->mobilModel->getMobil()
        ];

        return view('admin/data/table-mobil', $data);
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Profil Pengaturan'
        ];

        return view('admin/pengaturan', $data);
    }

    public function create()
    {

        $harga = number_format($this->request->getVar('harga'), 0, '', '.');
        $kilometer = number_format($this->request->getVar('kilometer'), 0, '', '.');
        $cc = number_format($this->request->getVar('cc'), 0, '', '.');
        $nama = ucwords($this->request->getVar('nama'));

        $file = $this->request->getFile('gambar-1');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $file2 = $this->request->getFile('gambar-2');
        if ($file2->isValid() && !$file2->hasMoved()) {
            $imageName2 = $file2->getRandomName();
            $file2->move('uploads/', $imageName2);
        }
        $file3 = $this->request->getFile('gambar-3');
        if ($file3->isValid() && !$file3->hasMoved()) {
            $imageName3 = $file3->getRandomName();
            $file3->move('uploads/', $imageName3);
        }


        $this->mobilModel->save([
            'gambar-1' => $imageName,
            'gambar-2' => $imageName2,
            'gambar-3' => $imageName3,
            'nama' => $nama,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $harga,
            'tanggal' => $this->request->getVar('tanggal'),
            'transmisi' => $this->request->getVar('transmisi'),
            'lokasi' => ucwords($this->request->getVar('lokasi')),
            'kilometer' => $kilometer,
            'mesin' => $this->request->getVar('mesin'),
            'bahanbakar' => $this->request->getVar('bahanbakar'),
            'platnomer' => $this->request->getVar('platnomer'),
            'pajak' => $this->request->getVar('pajak'),
            'warna' => ucwords($this->request->getVar('warna')),
            'bpkb' => $this->request->getVar('bpkb'),
            'cc' => $cc,
            'merek' => $this->request->getVar('merek'),
            'jenis' => $this->request->getVar('jenis'),
            'servis' => $this->request->getVar('servis'),
            'seat' => $this->request->getVar('duduk'),
            'buku-manual' => $this->request->getVar('buku-manual'),
            'buku-service' => $this->request->getVar('buku-service'),
            'kunci' => $this->request->getVar('kunci'),
            'fitur-1' => ucwords($this->request->getVar('fitur-1')),
            'fitur-2' => ucwords($this->request->getVar('fitur-2')),
            'fitur-3' => ucwords($this->request->getVar('fitur-3')),
            'interior-1' => ucwords($this->request->getVar('interior-1')),
            'interior-2' => ucwords($this->request->getVar('interior-2')),
            'interior-3' => ucwords($this->request->getVar('interior-3'))
        ]);
        session()->setFlashdata('pesan', 'Data Mobil berhasil ditambahkan');
        return redirect()->to('/admin/table');
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Mobil',
            'mobil' => $this->mobilModel->getMobil($id)
        ];
        if (empty($data['mobil'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('id tidak ditemukan' . $id . 'Dak ada');
        }
        return view('/admin/data/detail-mobil', $data);
    }
    public function deleteMobil($id)
    {
        $this->mobilModel->delete($id);
        session()->setFlashdata('pesan', 'Data Mobil berhasil dihapus');
        return redirect()->to('/admin/table');
    }

    public function form()
    {
        $data = [
            'title' => 'Form Data Mobil'

        ];
        return view('admin/data/form-mobil', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Form Data Artikel',
            'validation' => \Config\Services::validation()

        ];
        return view('admin/article/form-artikel', $data);
    }
    public function tableArtikel()
    {
        $data = [
            'title' => 'Table Data Artikel',
            'artikel' => $this->artikelModel->getArtikels()
        ];

        return view('admin/article/table-artikel', $data);
    }
    public function tableShop()
    {
        $data = [
            'title' => 'Table Data Pembeli',
            'pembeli' => $this->beliModel->getBeli()
        ];

        return view('admin/data/shop', $data);
    }

    public function deleteShop($id)
    {
        $this->beliModel->delete($id);
        session()->setFlashdata('pesan', 'Data Pembeli berhasil dihapus');
        return redirect()->to('/admin/data/shop');
    }
    public function tableReview()
    {
        $data = [
            'title' => 'Table Data Review',
            'review' => $this->reviewModel->getReview()
        ];

        return view('admin/review/table-review', $data);
    }
    public function deleteReview($id)
    {
        $this->reviewModel->delete($id);
        session()->setFlashdata('pesan', 'Review berhasil dihapus');
        return redirect()->to('/admin/review/table-review');
    }

    public function save()
    {

        $validationRules = [
            'judul-artikel' => [
                'rules' => 'required|is_unique[artikel.judul-artikel]',
                'errors' => [
                    'required' => 'Judul Artikel harus diisi.',
                    'is_unique' => 'Judul Artikel sudah terdaftar'
                ]
            ]
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/admin/artikel/form-artikel')->withInput()->with('validation', \Config\Services::validation());
        }


        $slug = url_title($this->request->getVar('judul-artikel'), '-', true);
        $file = $this->request->getFile('gambar-artikel');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }


        $this->artikelModel->save([
            'judul-artikel' => $this->request->getVar('judul-artikel'),
            'gambar-artikel' => $imageName,
            'slug-artikel' => $slug,
            'isi-artikel' => $this->request->getVar('isi-artikel'),
            'tanggal-artikel' => $this->request->getVar('tanggal-artikel'),
            // 'gambar-artikel' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Artikel berhasil ditambahkan');
        return redirect()->to('/admin/artikel/table-artikel');
    }

    public function delete($id)
    {
        $this->artikelModel->delete($id);
        session()->setFlashdata('pesan', 'Artikel berhasil dihapus');
        return redirect()->to('/admin/artikel/table-artikel');
    }

    public function editReview($id)
    {
        $data = [
            'title' => 'Form Ubah Review',
            'validation' => \Config\Services::validation(),
            'review' => $this->reviewModel->getReview($id)

        ];
        return view('admin/review/edit-review', $data);
    }
    public function updateReview($id)
    {

        $this->reviewModel->save([
            'id' => $id,
            'judul-review' => $this->request->getVar('judul-review'),
            'nama-review' => $this->request->getVar('nama-review'),
            'isi-review' => $this->request->getVar('isi-review'),
            'tanggal-review' => $this->request->getVar('tanggal-review')

        ]);

        session()->setFlashdata('pesan', 'Review berhasil diubah');

        return redirect()->to('/admin/review/table-review');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Artikel',
            'validation' => \Config\Services::validation(),
            'artikel' => $this->artikelModel->getArtikels($slug)

        ];
        return view('admin/article/edit-artikel', $data);
    }

    public function update($id)
    {
        $artikelLama = $this->artikelModel->find($id);
        $judulBaru = $this->request->getVar('judul-artikel');

        if ($artikelLama['judul-artikel'] == $judulBaru) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[artikel.judul-artikel]';
        }

        if (
            !$this->validate([
                'judul-artikel' => [
                    'rules' => $rule_judul,
                    'errors' => [
                        'required' => 'Judul Artikel harus diisi.',
                        'is_unique' => 'Judul Artikel sudah terdaftar'
                    ]
                ]
            ])
        ) {
            return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', \Config\Services::validation());
        }

        $slug = url_title($this->request->getVar('judul-artikel'), '-', true);
        $gambar = $this->request->getFile('gambar-artikel');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $imageName = $gambar->getRandomName();
            $gambar->move('uploads/', $imageName);
        }

        $this->artikelModel->save([
            'id' => $id,
            'gambar-artikel' => $imageName,
            'judul-artikel' => $this->request->getVar('judul-artikel'),
            'slug-artikel' => $slug,
            'isi-artikel' => $this->request->getVar('isi-artikel'),
            'tanggal-artikel' => $this->request->getVar('tanggal-artikel'),
            'gambar-artikel' => $this->request->getVar('gambar-artikel')
        ]);

        session()->setFlashdata('pesan', 'Artikel berhasil diubah');
        return redirect()->to('/admin/artikel/table-artikel');
    }




}
