<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $useTimestamps = false;
    protected $allowedFields = ['judul-review', 'isi-review', 'nama-review', 'tanggal-review'];


    public function getReview($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
