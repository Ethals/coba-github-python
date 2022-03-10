<?php

namespace App\Controllers;

use App\Models\IdentitasDesaModel;
use App\Models\PemerintahDesaModel;
use App\Models\ArsipSuratModel;
use App\Models\DaftarSuratModel;
use App\Models\BeritaDesaModel;
use CodeIgniter\Config\Config;

class Admin extends BaseController
{

    protected $identitasDesaModel;
    protected $pemerintahanDesaModel;
    protected $arsipSuratModel;
    protected $daftarSuratModel;
    protected $beritaDesaModel;

    public function __construct()
    {
        $this->identitasDesaModel = new IdentitasDesaModel();
        $this->pemerintahanDesaModel = new PemerintahDesaModel();
        $this->arsipSuratModel = new ArsipSuratModel();
        $this->daftarSuratModel = new DaftarSuratModel();
        $this->beritaDesaModel = new BeritaDesaModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard | Desa Lampenai',
            'user_name' => 'CodeBreak',
        ];
        return view('admin/dashboard', $data);
    }

    // Info Desa Start
    public function identitas_desa()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'title' => 'Identitas Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'dataIdentitasDesa' => $identitasDesa
        ];

        return view('admin/info-desa/identitas-desa/identitas-desa', $data);
    }

    public function identitas_desa_edit()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'title' => 'Identitas Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'dataIdentitasDesa' => $identitasDesa,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/info-desa/identitas-desa/identitas-desa-edit', $data);
    }

    public function identitas_desa_save()
    {
        if (!$this->validate([
            'nama_desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'nama_kades' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'kode_pos' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
        ])) {
            session()->setFlashdata('Failed', "Gagal Menyimpan Data Identitas Desa");
            return redirect()->to(base_url('admin/identitas_desa_edit'))->withInput();
        };

        $getId = $this->request->getVar('id');
        $identitasDesa = $this->identitasDesaModel;
        $identitasDesa->update($getId, [
            'nama_desa' => $this->request->getVar('nama_desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'nama_kades' => $this->request->getVar('nama_kades'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'jalan' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);
        session()->setFlashdata('Success', "Berhasil Menyimpan Data Identitas Desa");
        return redirect()->to(base_url('admin/identitas_desa'));
    }

    public function wilayah_administratif()
    {
        $data = [
            'title' => 'Wilayah Administrasi | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/info-desa/wilayah-administratif', $data);
    }

    public function pemerintah_desa()
    {
        $pemerintahanDesa = $this->pemerintahanDesaModel->first();

        $data = [
            'title' => 'Pemerintah Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'pemerintahDesa' => $pemerintahanDesa,
        ];
        return view('admin/info-desa/pemerintah-desa/pemerintah-desa', $data);
    }

    public function pemerintah_desa_edit()
    {
        $pemerintahanDesa = $this->pemerintahanDesaModel->first();

        $data = [
            'title' => 'Pemerintah Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'pemerintahDesa' => $pemerintahanDesa,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/info-desa/pemerintah-desa/pemerintah-desa-edit', $data);
    }

    public function pemerintah_desa_save()
    {
        if (!$this->validate([
            'visi_desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'misi_desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('Failed', "Gagal Menyimpan Data Pemerintah Desa");
            return redirect()->to(base_url('admin/pemerintah_desa_edit'))->withInput();
        };

        $getId = $this->request->getVar('id');
        $pemerintahanDesa = $this->pemerintahanDesaModel;
        $pemerintahanDesa->update($getId, [
            'visi' => $this->request->getVar('visi_desa'),
            'misi' => $this->request->getVar('misi_desa'),
        ]);
        session()->setFlashdata('Success', "Berhasil Menyimpan Data Pemerintah Desa");
        return redirect()->to(base_url('admin/pemerintah_desa'));
    }

    public function status_desa()
    {
        $data = [
            'title' => 'Status Desa | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/info-desa/status-desa', $data);
    }

    public function struktur_desa()
    {
        $data = [
            'title' => 'Struktur Desa | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/info-desa/struktur-desa', $data);
    }

    public function berita_desa()
    {
        $beritaDesa = $this->beritaDesaModel->findAll();

        $data = [
            'title' => 'Berita Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'berita_desa' => $beritaDesa
        ];
        return view('admin/info-desa/berita-desa/berita-desa', $data);
    }

    public function buat_berita_desa()
    {
        $data = [
            'title' => 'Berita Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/info-desa/berita-desa/buat-berita', $data);
    }

    public function berita_desa_edit($slug = '')
    {
        $beritaDesa = $this->beritaDesaModel->where(['slug' => $slug])->first();

        $data = [
            'title' => 'Berita Desa | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'data_berita' => $beritaDesa,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/info-desa/berita-desa/buat-berita-edit', $data);
    }

    public function berita_desa_update()
    {
        $slug = $this->request->getVar('slug');
        $beritaDesa = $this->beritaDesaModel->where(['slug' => $slug])->first();
        $id = $beritaDesa['id'];
        $title = $this->request->getVar('judul_berita');
        if ($title == $beritaDesa['judul']) {
            $rule_judul = 'required';
            $errors = [
                'required' => 'Harus Diisi',
            ];
        } else {
            $rule_judul = 'required|is_unique[berita_desa.judul]';
            $errors = [
                'required' => 'Harus Diisi',
                'is_uniq' => 'Judul Berita Telah Ada'
            ];
        }
        if (!$this->validate([
            'judul_berita' => [
                'rules' => $rule_judul,
                'errors' => $errors
            ],
            'penulis_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'isi_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'fileupload' => [
                'rules' => 'max_size[fileupload,5120]|is_image[fileupload]|mime_in[fileupload,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran File Maximal 5 mb',
                    'is_image' => 'File Yang Diupload Harus Gambar',
                    'mime_in' => 'File Yang Diupload Harus png/jpg',
                ]
            ]
        ])) {
            session()->setFlashdata('Failed', "Gagal Membuat Berita Desa");
            return redirect()->to(base_url('admin/berita_desa_edit/' . $slug))->withInput();
        };

        $slug = url_title($this->request->getVar('judul_berita'), '-', true);
        $fileupload = $this->request->getFile('fileupload');
        $extension = '.' . $fileupload->getExtension();
        $filename = $slug . $extension;
        if ($fileupload->getError() == 4) {
            $filename = $beritaDesa['gambar_berita'];
        } else {
            unlink('assets/upload/berita/' . $beritaDesa['gambar_berita']);
            $fileupload->move('assets/upload/berita/', $filename);
        }

        $beritaDesa = $this->beritaDesaModel;
        $beritaDesa->update($id, [
            'judul' => $this->request->getVar('judul_berita'),
            'penulis_berita' => $this->request->getVar('penulis_berita'),
            'slug' => $slug,
            'isi_berita' => $this->request->getVar('isi_berita'),
            'gambar_berita' => $filename
        ]);

        session()->setFlashdata('Success', "Berhasil Membuat Berita Desa");
        return redirect()->to(base_url('admin/berita_desa'));
    }

    public function berita_desa_save()
    {
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required|is_unique[berita_desa.judul]',
                'errors' => [
                    'required' => 'Harus Diisi',
                    'is_uniq' => 'Judul Berita Telah Ada'
                ]
            ],
            'penulis_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'isi_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus Diisi',
                ]
            ],
            'fileupload' => [
                'rules' => 'uploaded[fileupload]|max_size[fileupload,5120]|is_image[fileupload]|mime_in[fileupload,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Foto Berita Harus Diupload',
                    'max_size' => 'Ukuran File Maximal 5 mb',
                    'is_image' => 'File Yang Diupload Harus Gambar',
                    'mime_in' => 'File Yang Diupload Harus png/jpg',
                ]
            ]
        ])) {
            session()->setFlashdata('Failed', "Gagal Membuat Berita Desa");
            return redirect()->to(base_url('admin/buat_berita_desa'))->withInput();
        };

        $slug = url_title($this->request->getVar('judul_berita'), '-', true);

        $fileupload = $this->request->getFile('fileupload');
        $extension = '.' . $fileupload->getExtension();
        $filename = $slug . $extension;
        $fileupload->move('assets/upload/berita/', $filename);

        $beritaDesa = $this->beritaDesaModel;
        $beritaDesa->save([
            'judul' => $this->request->getVar('judul_berita'),
            'penulis_berita' => $this->request->getVar('penulis_berita'),
            'slug' => $slug,
            'isi_berita' => $this->request->getVar('isi_berita'),
            'tgl_berita' => date('d F Y'),
            'gambar_berita' => $filename
        ]);

        session()->setFlashdata('Success', "Berhasil Membuat Berita Desa");
        return redirect()->to(base_url('admin/berita_desa'));
    }

    public function produk_desa()
    {
        $data = [
            'title' => 'Produk Desa | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/info-desa/produk-desa', $data);
    }

    public function wisata_desa()
    {
        $data = [
            'title' => 'Wisata Desa | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/info-desa/wisata-desa', $data);
    }
    // Info Desa End

    // Kependudukan Start
    public function penduduk()
    {
        $data = [
            'title' => 'Penduduk | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/penduduk', $data);
    }

    public function keluarga()
    {
        $data = [
            'title' => 'Keluarga | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/keluarga', $data);
    }

    public function rumah_tangga()
    {
        $data = [
            'title' => 'Rumah Tangga | Desa lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/rumah-tangga', $data);
    }

    public function kelompok()
    {
        $data = [
            'title' => 'Kelompok | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/kelompok', $data);
    }

    public function data_suplemen()
    {
        $data = [
            'title' => 'Data Suplement | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/data-suplemen', $data);
    }

    public function calon_pemilih()
    {
        $data = [
            'title' => 'Calon Pemilih | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Kependudukan/calon-pemilih', $data);
    }
    // End kependudukan

    // Start Statistik
    public function statistik_kependudukan()
    {
        $data = [
            'title' => 'Statistik Kependudukan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Statistik/statistik-kependudukan', $data);
    }

    public function laporan_bulanan()
    {
        $data = [
            'title' => 'Laporan Bulanan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Statistik/laporan-bulanan', $data);
    }

    public function laporan_kelompok_rentan()
    {
        $data = [
            'title' => 'Laporan Kelompok Rentan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Statistik/laporan-kelompok-rentan', $data);
    }
    // End Statistik

    // Start Layanan Surat
    public function pengaturan_surat()
    {
        $data = [
            'title' => 'Pengaturan Surat | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Layanan-surat/pengaturan-surat', $data);
    }

    public function buat_surat()
    {
        $daftarSurat = $this->daftarSuratModel->findAll();
        $data = [
            'title' => 'Daftar Layanan Surat | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'daftar_surat' => $daftarSurat
        ];
        return view('admin/Layanan-surat/daftar-surat', $data);
    }

    public function cetak_surat($id = '')
    {
        $daftarSurat = $this->daftarSuratModel->where(['id' => $id])->first();
        $idInput = explode(',', $daftarSurat['input_id']);
        $inputsurat = explode(',', $daftarSurat['input']);
        $data = [
            'title' => 'Buat Surat | Desa Lampenai',
            'user_name' => 'CodeBreak',
            'id_input' => $idInput,
            'input' => $inputsurat,
            'data_surat' => $daftarSurat,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/Layanan-surat/buat-surat', $data);
    }

    public function save_surat($id = '')
    {
        $daftarSurat = $this->daftarSuratModel->where(['id' => $id])->first();
        $idInput = explode(',', $daftarSurat['input_id']);

        if (!$this->validate(
            [
                'inputdata' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Harus Diisi',
                    ]
                ]
            ]
        )) {
            session()->setFlashdata('Failed', "Gagal Membuat Surat");
            return redirect()->to(base_url('admin/cetak_surat/' . $id))->withInput();
        };

        return redirect()->to(base_url('admin/buat_surat'));
    }

    public function arsip_layanan()
    {
        $data = [
            'title' => 'Arsip Layanan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Layanan-surat/arsip-layanan', $data);
    }

    public function panduan()
    {
        $data = [
            'title' => 'Panduan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Layanan-surat/panduan', $data);
    }

    public function daftar_persyaratan()
    {
        $data = [
            'title' => 'Daftar Persyaratan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Layanan-surat/daftar-persyaratan', $data);
    }

    // End Layanan Surat

    // Start Sekretariat
    public function informasi_publik()
    {
        $data = [
            'title' => 'Informasi Publik | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Sekretariat/informasi-publik', $data);
    }

    public function inventaris()
    {
        $data = [
            'title' => 'Inventaris | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Sekretariat/inventaris', $data);
    }

    public function klasifikasi_surat()
    {
        $data = [
            'title' => 'Klasifikasi Surat | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Sekretariat/klasifikasi-surat', $data);
    }

    // End Sekretariat

    // Start Keuangan
    public function impor_data()
    {
        $data = [
            'title' => 'Impor Data | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Keuangan/impor-data', $data);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Keuangan/laporan', $data);
    }

    public function input_data()
    {
        $data = [
            'title' => 'Input Data | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Keuangan/input-data', $data);
    }

    public function laporan_manual()
    {
        $data = [
            'title' => 'Laporan Manual | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Keuangan/laporan-manual', $data);
    }

    // End Keuangan

    // Start Administrasi
    public function administrasi_umum()
    {
        $data = [
            'title' => 'Administrasi Umum | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/buku-administrasi/administrasi-umum', $data);
    }

    public function administrasi_penduduk()
    {
        $data = [
            'title' => 'Administrasi Penduduk | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/buku-administrasi/administrasi-penduduk', $data);
    }

    public function administrasi_keuangan()
    {
        $data = [
            'title' => 'Administrasi Keuangan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/buku-administrasi/administrasi-keuangan', $data);
    }

    public function administrasi_pembangunan()
    {
        $data = [
            'title' => 'Administrasi Pembangunan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/buku-administrasi/administrasi-pembangunan', $data);
    }

    // End Administrasi

    // Start pengaturan

    public function pengaturan()
    {
        $data = [
            'title' => 'Pengaturan | Desa Lampenai',
            'user_name' => 'CodeBreak'
        ];
        return view('admin/Pengaturan/pengaturan', $data);
    }

    // End pengaturan
}
