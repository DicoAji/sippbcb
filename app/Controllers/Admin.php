<?php

namespace App\Controllers;

use App\Models\MBenda;
use App\Models\MLaporan;
use App\Models\MPelapor;
use App\Models\MJenisBenda;
use App\Models\MPendata;

class Admin extends BaseController


{
    protected $MBenda;
    protected $MLaporan;
    protected $MPelapor;
    protected $MJenisBenda;
    protected $MPendata;
    public function __construct()
    {
        $this->MBenda = new MBenda();
        $this->MLaporan = new MLaporan();
        $this->MPelapor = new MPelapor();
        $this->MJenisBenda = new MJenisBenda();
        $this->MPendata = new MPendata();
        $this->db = \Config\Database::connect();
    }
    public function indeks()
    {
        $query = $this->MBenda->tampiladmin();
        $benda = $query->getResultArray();
        // dd($benda);


        $data = [
            'benda' => $benda,
            'title' => 'Koleksi | Admin-MauLapor',

        ];
        return view('admin/index', $data);
    }
    public function downloadKoleksiSorting()
    {
        $query = $this->MBenda->tampiladmin();
        $benda = $query->getResultArray();
        $data = [
            'benda' => $benda,
            'title' => 'Koleksi'
        ];
        return view('admin/sortingDownloadKoleksi', $data);
    }
    public function downloadLaporan()
    {
        $query = $this->MLaporan->tampillaporan();
        $laporan = $query->getResultArray();
        $data = [
            'title' => 'Download Laporan Masyarakat ',
            'laporan' => $laporan
        ];
        return view('admin/sortingDownloadLaporan', $data);
    }
    public function laporan()
    {
        $query = $this->MLaporan->tampillaporan();
        $laporan = $query->getResultArray();
        $data = [
            'laporan' => $laporan,
            'title' => 'Laporan | Admin-MauLapor'
        ];
        return view('admin/laporan', $data);
    }
    public function sortingDownloadLaporan()
    {
        $query = $this->MLaporan->tampillaporan();
        $laporan = $query->getResultArray();
        $data = [
            'laporan' => $laporan,
            'title' => 'Laporan masyarakat'
        ];
        return view('admin/sortingDownloadLaporan', $data);
    }
    public function tambah()
    {

        $jenisbenda = $this->MJenisBenda->findAll();
        // $pendata = $this->MPendata->findAll();
        $data = [
            'title' => 'Tambah | Admin-MauLapor',
            'jenisbenda' => $jenisbenda
        ];
        return view('admin/tambah', $data);
    }

    // seeting lagi di myauth
    public function login()
    {
        $data = [
            'title' => 'Login | Admin-MauLapor',
        ];
        return view('admin/login', $data);
    }
    public function lupapassword()
    {
        $data = [
            'title' => 'Lupa  Password | Admin-MauLapor',

        ];
        return view('admin/lupapassword', $data);
    }

    // add benda
    public function tambahbenda()
    {
        $image = $this->request->getFile('gambar');
        $image2 = $this->request->getFile('gambar2');
        $image3 = $this->request->getFile('gambar3');
        $image4 = $this->request->getFile('gambar4');

        if ($image->getError() == 4) {
            $namaImage = '';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('assets/img/benda', $namaImage);
        }


        if ($image2->getError() == 4) {
            $namaImage2 = null;
        } else {
            $namaImage2 = $image2->getRandomName();
            $image2->move('assets/img/benda', $namaImage2);
        }

        if ($image3->getError() == 4) {
            $namaImage3 = null;
        } else {
            $namaImage3 = $image3->getRandomName();
            $image3->move('assets/img/benda', $namaImage3);
        }
        if ($image4->getError() == 4) {
            $namaImage4 = null;
        } else {
            $namaImage4 = $image4->getRandomName();
            $image4->move('assets/img/benda', $namaImage4);
        }



        $this->MPendata->insert([
            'pendata' => $this->request->getVar('pendata'),
            // 'waktu_pendataan' => $this->request->getVar('waktuPendataan'),

        ]);
        $id_pendata = $this->db->insertID();
        // dd($id_pendata); 
        $this->MBenda->insert([
            'nama_benda' => $this->request->getVar('namabenda'),
            'id_pendata' => $id_pendata,
            'id_jenis_benda' => $this->request->getVar('jenisbenda'),
            'lokasi_saat_ini' => $this->request->getVar('lokasisaatini'),
            'juru_pemelihara' => $this->request->getVar('jupel'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_ditemukan' => $this->request->getVar('tanggalDitemukan'),
            'kegunaan' => $this->request->getVar('kegunaan'),
            'koordinat' => $this->request->getVar('koordinat'),
            'sejarah' => $this->request->getVar('sejarah'),
            'gambar' => $namaImage,
            'gambar2' => $namaImage2,
            'gambar3' => $namaImage3,
            'gambar4' => $namaImage4

        ]);
        // dd(($this));
        // 'pendata' => $this->request->getVar('pendata'),
        // 'waktu_pendataan' => $this->request->getVar('waktuPendataan'),


        $session = \Config\Services::session();
        session()->setFlashdata('add-benda', 'Data berhasil ditambahkan.');
        return redirect()->to('Admin/indeks');
    }
    public function tambahkategori()
    {
        $this->MJenisBenda->insert([
            'jenis_benda' => $this->request->getVar('jenisbenda'),

        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('add-msg-barang', 'Data berhasil ditambahkan.');
        return redirect()->to('Admin/tambah');
    }
    // delete
    public function delete($id_benda)
    {
        $benda = $this->MBenda->find($id_benda);
        $image_with_path[] = './assets/img/benda/' . $benda['gambar'];
        $image_with_path[] = './assets/img/benda/' . $benda['gambar2'];
        $image_with_path[] = './assets/img/benda/' . $benda['gambar3'];
        $image_with_path[] = './assets/img/benda/' . $benda['gambar4'];


        // dd($image_with_path);
        // gambbar 1
        if ($benda['gambar'] != null) {
            unlink($image_with_path[0]);
        }
        // gambbar 2
        if ($benda['gambar2'] != null) {
            unlink($image_with_path[1]);
        }
        // gambbar 1
        if ($benda['gambar3'] != null) {
            unlink($image_with_path[2]);
        }
        if ($benda['gambar4'] != null) {
            unlink($image_with_path[3]);
        }

        $pendata = $benda['id_pendata'];
        $this->MBenda->delete($id_benda);
        $this->MPendata->delete($pendata);
        //session flashdata
        $session = \Config\Services::session();
        session()->setFlashdata('delete-benda', 'Data berhasil dihapus!');

        return redirect()->to('Admin/indeks');
    }
    public function hapuslaporan($id_laporan)
    {

        $laporan = $this->MLaporan->find($id_laporan);
        $image_with_path[] = './assets/img/gambarlaporan/' . $laporan['gambar'];
        $image_with_path[] = './assets/img/gambarlaporan/' . $laporan['gambar2'];
        $image_with_path[] = './assets/img/gambarlaporan/' . $laporan['gambar3'];
        $image_with_path[] = './assets/img/gambarlaporan/' . $laporan['gambar4'];

        // dd($image_with_path);
        foreach ($image_with_path as $data) {
            if (is_dir($data)) {
                continue;
            } else {
                if (file_exists($data)) {
                    // dd($laporan);
                    unlink($data);
                }
            }
        }
        $session = \Config\Services::session();
        session()->setFlashdata('delete-laporan', 'Data berhasil dihapus!');
        $this->MLaporan->delete($id_laporan);
        return redirect()->to('Admin/laporan');
    }
    // ke halaman ubahdata
    public function ubahdata($id_benda)
    {
        $jenisbenda = $this->MJenisBenda->findAll();
        $query = $this->MBenda->tampilubahdata($id_benda);
        $benda = $query->getFirstRow('array');
        // dd($benda);
        $data = [
            'benda' => $benda,
            'jenisbenda' => $jenisbenda,
            'title' => 'Ubah Data  | Admin-MauLapor'
        ];
        return view('/Admin/ubahdata', $data);
        //ke halaman admin uabahdata

    }
    // Update data
    public function update($id_benda)
    {

        $benda = $this->MBenda->find($id_benda);
        $id_pendata = $benda['id_pendata'];
        $image = $this->request->getFile('gambar');
        $imagelama = $this->request->getVar('gambarlama');
        $image2 = $this->request->getFile('gambar2');
        $imagelama2 = $this->request->getVar('gambarlama2');
        $image3 = $this->request->getFile('gambar3');
        $imagelama3 = $this->request->getVar('gambarlama3');
        $image4 = $this->request->getFile('gambar4');
        $imagelama4 = $this->request->getVar('gambarlama4');
        // dd($imagelama2);
        // gambar
        if ($image->getError() == 4) {
            $namaImage = $imagelama;
        } else {
            $namaImage = $image->getRandomName();
            $image->move('assets/img/benda', $namaImage);

            //hapus file lama
            $gambar = './assets/img/benda/' . $benda['gambar'];
            if ($imagelama != null) {
                unlink($gambar);
            }

            // unlink($gambar1);
            $this->MBenda->save([
                // simpan gambar???
                'id_benda' => $id_benda,
                'gambar' => $namaImage,
            ]);
        }
        // gambar2
        if ($image2->getError() == 4) {
            $namaImage2 = $imagelama2;
        } else {
            $namaImage2 = $image2->getRandomName();
            $image2->move('assets/img/benda', $namaImage2);

            //hapus file lama
            $gambar2 = './assets/img/benda/' . $benda['gambar2'];
            if ($imagelama2 != null) {
                unlink($gambar2);
            }
            $this->MBenda->save([
                // simpan gambar???
                'id_benda' => $id_benda,
                'gambar2' => $namaImage2,
            ]);
        }
        // gambar3
        if ($image3->getError() == 4) {
            $namaImage3 = $imagelama3;
        } else {
            $namaImage3 = $image3->getRandomName();
            $image3->move('assets/img/benda', $namaImage3);
            //hapus file lama
            $gambar3 = './assets/img/benda/' . $benda['gambar3'];
            if ($imagelama3 != null) {
                unlink($gambar3);
            }
            $this->MBenda->save([
                // simpan gambar???
                'id_benda' => $id_benda,
                'gambar3' => $namaImage3,
            ]);
            // unlink('assets/img/benda/'.$this->request->getVar('gambarlama3'));
        }
        // gambar4
        if ($image4->getError() == 4) {
            $namaImage4 = $imagelama4;
        } else {
            $namaImage4 = $image4->getRandomName();
            $image4->move('assets/img/benda', $namaImage4);
            //hapus file lama
            $gambar4 = './assets/img/benda/' . $benda['gambar4'];
            if ($imagelama4 != null) {
                unlink($gambar4);
            }
            $this->MBenda->save([
                // simpan gambar???
                'id_benda' => $id_benda,
                'gambar4' => $namaImage4,
            ]);
        }
        $this->MPendata->update($id_pendata, [
            'pendata' => $this->request->getVar('pendata'),

        ]);
        // $id_pendata = $this->db->insertID();
        $this->MBenda->update($id_benda, [
            // 'id_benda' => $id_benda,
            'nama_benda' => $this->request->getVar('namabenda'),
            'id_pendata' => $id_pendata,
            'id_jenis_benda' => $this->request->getVar('jenisbenda'),
            'lokasi_saat_ini' => $this->request->getVar('lokasisaatini'),
            'juru_pemelihara' => $this->request->getVar('jupel'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_ditemukan' => $this->request->getVar('tanggalDitemukan'),
            'kegunaan' => $this->request->getVar('kegunaan'),
            'koordinat' => $this->request->getVar('koordinat'),
            'sejarah' => $this->request->getVar('sejarah'),
            'gambar' => $namaImage,
            'gambar3' => $namaImage3,
            'gambar2' => $namaImage2,
            'gambar4' => $namaImage4,
        ]);
        $session = \Config\Services::session();
        session()->setFlashdata('update-benda', 'Data berhasil diupdate');
        return redirect()->to('Admin/indeks');
    }

    // ubah laporan
    public function ubahlaporan($id_laporan)
    {
        $query = $this->MLaporan->ubahstatus($id_laporan);
        $laporan = $query->getFirstRow('array');
        $data = [
            'laporan' => $laporan,
            'title' => 'Ubah Laporan  | Admin-MauLapor'
        ];
        return view('/Admin/ubahstatus', $data);
    }

    // updatestatus
    public function updatestatus($id_laporan)
    {

        $this->MLaporan->save([
            'id_laporan' => $id_laporan,
            'nama_pelapor' => $this->request->getVar('pelapor'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('Admin/laporan');
    }

    // ke halaman tambah koleksi dari laporan
    public function tambahDariLaporan($id_laporan)
    {
        $query = $this->MLaporan->koleksiLaporan($id_laporan);
        $jenisbenda = $this->MJenisBenda->findAll();
        $laporan = $query->getFirstRow('array');
        $data = [
            'laporan' => $laporan,
            'jenisbenda' => $jenisbenda,
            'title' => 'tambah Koleksi dari Laporan | Admin-MauLapor'
        ];
        return view('/Admin/tambahKoleksiLaporan', $data);
    }

    // tambah dari laporan
    public function tambahKoleksiDariLaporan($id_laporan)
    {
        // $laporan = $this->MLaporan->find($id_laporan);
        // $id_pendata = $benda['id_pendata'];
        $image = $this->request->getFile('gambar');
        $imagelama = $this->request->getVar('gambarlama');
        $image2 = $this->request->getFile('gambar2');
        $imagelama2 = $this->request->getVar('gambarlama2');
        $image3 = $this->request->getFile('gambar3');
        $imagelama3 = $this->request->getVar('gambarlama3');
        $image4 = $this->request->getFile('gambar4');
        $imagelama4 = $this->request->getVar('gambarlama4');


        // gambar
        // jika gambar lama
        if ($image->getError() == 4) {
            // tidak memasukkan file
            $namaImage = $imagelama;
            // dd($namaImage);
            if (is_file('assets/img/gambarlaporan/' . $namaImage)) {
                copy('assets/img/gambarlaporan/' . $namaImage, 'assets/img/benda/' . $namaImage);
            }
        } else {
            $namaImage = $image->getRandomName();
            $image->move('assets/img/benda', $namaImage);
            // $this->MBenda->save([
            //     'gambar' => $namaImage
            // ]);

        }
        // dd($namaImage);
        // gambar2
        if ($image2->getError() == 4) {
            $namaImage2 = $imagelama2;
            if (is_file('assets/img/gambarlaporan/' . $namaImage2)) {
                copy('assets/img/gambarlaporan/' . $namaImage2, 'assets/img/benda/' . $namaImage2);
            }
            // copy('assets/img/gambarlaporan/'.$namaImage2, 'assets/img/benda/'.$namaImage2);
        } else {

            $namaImage2 = $image2->getRandomName();
            $image2->move('assets/img/benda', $namaImage2);
            //     $this->MBenda->save([
            //        'gambar2' => $namaImage2,
            //    ]);
        }
        // gambar3
        if ($image3->getError() == 4) {
            $namaImage3 = $imagelama3;
            if (is_file('assets/img/gambarlaporan/' . $namaImage3)) {
                copy('assets/img/gambarlaporan/' . $namaImage3, 'assets/img/benda/' . $namaImage3);
            }
            // copy('assets/img/gambarlaporan/'.$namaImage3, 'assets/img/benda/'.$namaImage3);
        } else {
            $namaImage3 = $image3->getRandomName();
            $image3->move('assets/img/gambarlaporan', $namaImage3);

            //    $this->MBenda->save([
            //        'gambar3' => $namaImage3,
            //    ]);
        }
        // gambar4
        if ($image4->getError() == 4) {
            $namaImage4 = $imagelama4;
            if (is_file('assets/img/gambarlaporan/' . $namaImage4)) {
                copy('assets/img/gambarlaporan/' . $namaImage4, 'assets/img/benda/' . $namaImage4);
            }
            // copy('assets/img/gambarlaporan/'.$namaImage4, 'assets/img/benda/'.$namaImage4);
        } else {
            $namaImage4 = $image4->getRandomName();
            $image4->move('assets/img/gambarlaporan', $namaImage4);
            //    $this->MBenda->save([
            //        'gambar4' => $namaImage4,
            //    ]);
        }


        $this->MPendata->insert([
            'pendata' => $this->request->getVar('pendata')

        ]);


        $id_pendata = $this->db->insertID();
        // dd($email);
        $this->MBenda->insert([
            'nama_benda' => $this->request->getVar('namabenda'),
            'id_pendata' => $id_pendata,
            'id_laporan' => $id_laporan,
            'id_jenis_benda' => $this->request->getVar('jenisbenda'),
            'lokasi_saat_ini' => $this->request->getVar('lokasisaatini'),
            'juru_pemelihara' => $this->request->getVar('jupel'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_ditemukan' => $this->request->getVar('tanggalDitemukan'),
            'kegunaan' => $this->request->getVar('kegunaan'),
            'koordinat' => $this->request->getVar('koordinat'),
            'sejarah' => $this->request->getVar('sejarah'),
            'gambar' => $namaImage,
            'gambar2' => $namaImage2,
            'gambar3' => $namaImage3,
            'gambar4' => $namaImage4

        ]);
        $this->MLaporan->update($id_laporan, [
            'status' => 'terdata'
        ]);

        $session = \Config\Services::session();
        session()->setFlashdata('add-benda', 'Data berhasil ditambahkan.');
        return redirect()->to('Admin/indeks');
    }
}
