<?php

namespace App\Models;

use CodeIgniter\Model;

class BeliModel extends Model
{
    protected $table = 'pembeli';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama', 'email', 'telepon', 'nama-mobil', 'merek-mobil', 'jenis-mobil'];


    public function getBeli($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
