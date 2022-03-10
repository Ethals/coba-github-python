<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaDesaModel extends Model
{
    protected $table = "berita_desa";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'judul', 'penulis_berita', 'slug', 'isi_berita', 'tgl_berita', 'gambar_berita'
    ];
}
