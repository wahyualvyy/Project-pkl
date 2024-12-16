<?php
namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'mobil';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'gambar-1',
        'gambar-2',
        'gambar-3',
        'nama',
        'deskripsi',
        'harga',
        'tanggal',
        'transmisi',
        'lokasi',
        'kilometer',
        'mesin',
        'bahanbakar',
        'platnomer',
        'pajak',
        'warna',
        'bpkb',
        'cc',
        'merek',
        'jenis',
        'servis',
        'seat',
        'buku-manual',
        'buku-service',
        'kunci',
        'fitur-1',
        'fitur-2',
        'fitur-3',
        'interior-1',
        'interior-2',
        'interior-3'
    ];
    public function getMobil($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }

    public function getMerek($merek)
    {
        return $this->where('merek', $merek)->findAll();
    }
}
