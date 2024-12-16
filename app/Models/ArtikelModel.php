<?php

namespace App\Models;

use CodeIgniter\Model;


class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $useTimestamps = false;
    protected $allowedFields = ['judul-artikel', 'gambar-artikel', 'isi-artikel', 'slug-artikel', 'tanggal-artikel'];

    public function getArtikels($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug-artikel' => $slug])->first();
    }

   
}
