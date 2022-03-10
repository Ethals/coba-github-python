<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSuratModel extends Model
{
    protected $table = "daftar_surat";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'jenis_surat', 'inpu_id', 'input'
    ];
};
