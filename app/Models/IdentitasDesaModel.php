<?php

namespace App\Models;

use CodeIgniter\Model;

class IdentitasDesaModel extends Model
{
    protected $table = "identitas_desa";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama_desa', 'jalan', 'kode_pos', 'kecamatan', 'kabupaten', 'provinsi', 'nama_kades', 'deskripsi'
    ];
}
