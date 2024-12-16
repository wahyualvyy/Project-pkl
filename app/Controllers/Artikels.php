<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikels extends BaseController
{

    protected $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        helper('custom');
    }



    public function index(): string
    {
        $data = [
            'title' => 'Artikel Dan Berita',
            'artikel' => $this->artikelModel->getArtikels()
        ];

        return view('client/article/artikels', $data);
    }
    public function artikel($slug): string
    {
        $artikel = $this->artikelModel->getArtikels($slug);
        $isiArtikel = $artikel['isi-artikel'];
        $paragraphs = explode('.', $isiArtikel);
        $totalParagraphs = count($paragraphs);
        $paragraphsPerSection = ceil($totalParagraphs / 3);
        $isiArtikel1 = implode('.', array_slice($paragraphs, 0, $paragraphsPerSection)) . '.';
        $isiArtikel2 = implode('.', array_slice($paragraphs, $paragraphsPerSection, $paragraphsPerSection)) . '.';
        $isiArtikel3 = implode('.', array_slice($paragraphs, $paragraphsPerSection * 2)) . '.';


        $data = [
            'title' => 'Artikel Dan Berita',
            'artikel' => $this->artikelModel->getArtikels($slug),
            'artikels' => $this->artikelModel->getArtikels(),
            'isi_artikel_1' => $isiArtikel1,
            'isi_artikel_2' => $isiArtikel2,
            'isi_artikel_3' => $isiArtikel3
        ];
        if (empty($data['artikel'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul artikel' . $slug . 'Dak ada');
        }

        return view('client/article/artikel', $data);
    }



}
