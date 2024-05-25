<?php

namespace App\Controllers;

use App\Models\MBenda;
use App\Models\MLaporan;
use App\Models\MPelapor;
use App\Models\MPendata;

class Umum extends BaseController
{
    protected $MBenda;
    protected $MLaporan;
    protected $MPelapor;
    protected $MPendata;


    public function __construct()
    {
        $this->MBenda = new MBenda();
        $this->db = \Config\Database::connect();

        $this->MLaporan = new MLaporan();
        $this->db = \Config\Database::connect();

        $this->MPelapor = new MPelapor();
        $this->db = \Config\Database::connect();

        $this->MPendata = new MPendata();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'Beranda-MauLapor',

        ];
        return view('public/index', $data);
    }


    public function koleksi()
    {

        $query = $this->MBenda->tampilkoleksi();
        $benda = $query->getResultArray();
        $data = [
            'benda' => $benda,
            'title' => 'Koleksi-MauLapor',
        ];
        return view('public/koleksi', $data);
    }
    public function laporkan()
    {
        $data = [
            'title' => 'Laporkan-MauLapor',
        ];

        return view('public/laporkan', $data);
    }

    // tambah laporan
    public function tambahlaporan()
    {
        // gambar1
        $image = $this->request->getFile('gambar');
        if ($image->getError() == 4) {
            $namaImage = null;
        } else {
            $namaImage = $image->getRandomName();
            $image->move('assets/img/gambarlaporan', $namaImage);
        }
        // gambar2
        $image2 = $this->request->getFile('gambar2');
        if ($image2->getError() == 4) {
            $namaImage2 = null;
        } else {
            $namaImage2 = $image2->getRandomName();
            $image2->move('assets/img/gambarlaporan', $namaImage2);
        }
        // gambar3
        $image3 = $this->request->getFile('gambar3');
        if ($image3->getError() == 4) {
            $namaImage3 = null;
        } else {
            $namaImage3 = $image3->getRandomName();
            $image3->move('assets/img/gambarlaporan', $namaImage3);
        }
        // gambar4
        $image4 = $this->request->getFile('gambar4');
        if ($image4->getError() == 4) {
            $namaImage4 = null;
        } else {
            $namaImage4 = $image4->getRandomName();
            $image4->move('assets/img/gambarlaporan', $namaImage4);
        }

        // $nama = $this->request->getVar('nama');
        // dd($nama);


        $this->MPelapor->insert([
            'nama_pelapor'  => $this->request->getVar('nama'),
            'nik'  => $this->request->getVar('nik'),
            'email' => $this->request->getVar('email'),
            'nomor_hubung'  => $this->request->getVar('nomor'),
        ]);
        $id_pelapor = $this->db->insertID();
        // $email = $this->request->getVar('email');
        // dd($email);
        $this->MLaporan->save([
            // 'lokasi_penemuan' => $this->request->getVar('lokasi'),
            'id_pelapor'  => $id_pelapor,
            'tanggal_penemuan' => $this->request->getVar('tanggal'),
            'status' => 'belum',
            'dusun_penemuan' => $this->request->getVar('dusunPenemuan'),
            'desa_penemuan' => $this->request->getVar('desaPenemuan'),
            'rt_penemuan' => $this->request->getVar('rtPenemuan'),
            'rw_penemuan' => $this->request->getVar('rwPenemuan'),
            'kec_penemuan' => $this->request->getVar('kecPenemuan'),
            'gambar' => $namaImage,
            'gambar2' => $namaImage2,
            'gambar3' => $namaImage3,
            'gambar4' => $namaImage4

        ]);

        $session = \Config\Services::session();
        session()->setFlashdata('pesan-laporan', 'Laporan berhasil dikirim');
        return redirect()->to('Umum/laporkan');
    }
}
