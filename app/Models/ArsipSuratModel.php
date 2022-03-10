<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipSuratModel extends Model
{
    protected $table = "arsip_surat";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nomor_surat', 'jenis_surat', 'tanggal_surat'
    ];
}
