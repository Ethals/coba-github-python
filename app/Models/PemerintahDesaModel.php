<?php

namespace App\Models;

use CodeIgniter\Model;

class PemerintahDesaModel extends Model
{
    protected $table = "pemerintah_desa";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'visi', 'misi', 'struktur_pemerintahan', 'struktur_bpd'
    ];
}
