<?php 

namespace App\Models;

use CodeIgniter\Model;

class MBenda extends Model
{
        protected $table = 'benda';
        
        protected $primaryKey = 'id_benda';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_benda', 'id_jenis_benda','id_pendata' ,'nama_benda', 'lokasi_saat_ini', 'gambar','gambar2','gambar3','gambar4','juru_pemelihara','keterangan','tanggal_ditemukan','kegunaan','koordinat','sejarah' ];
        public function getBenda($id_benda = null){
                
                $db = \Config\Database::connect();
                
                if ($id_benda != null){
                        $query = $db->query("SELECT * from benda where id_benda = ".$id_benda."");
                }
                else{
                        $query = $db->query("SELECT benda.id_benda, benda.nama_benda, benda.id_jenis_benda, benda.id_pendata, benda.lokasi_saat_ini, benda.gambar, benda.gambar2, benda.gambar3, benda.gambar4, benda.juru_pemelihara, benda.keterangan, benda.tanggal_ditemukan, benda.kegunaan, benda.koordinat, benda.sejarah from benda");
                }
                return $query;

        }
        public function tampiladmin(){
                $db = \Config\Database::connect();

                $builder = $db->table('benda');
                $builder->select('nama_benda, id_benda, pendata.pendata, pendata.waktu_pendataan, jenisbenda.jenis_benda, juru_pemelihara, benda.gambar, benda.gambar2, benda.gambar3, benda.gambar4, lokasi_saat_ini, keterangan, benda.tanggal_ditemukan, benda.kegunaan, benda.koordinat, benda.sejarah' );                
                $builder->join('jenisbenda', 'jenisbenda.id_jenis_benda = benda.id_jenis_benda');
                $builder->join('pendata', 'pendata.id_pendata = benda.id_pendata');
                // join pendata
                $builder->orderBy('id_benda','desc');
                $query = $builder->get();
                return $query;
        }
        public function tampilubahdata($id_benda){
                $db = \Config\Database::connect();
                $builder = $db->table('benda');
                $builder->select('nama_benda, id_benda, benda.id_jenis_benda, pendata.pendata, pendata.waktu_pendataan, jenisbenda.jenis_benda, juru_pemelihara, benda.gambar, benda.gambar2, benda.gambar3, benda.gambar4, lokasi_saat_ini, keterangan, benda.tanggal_ditemukan, benda.kegunaan, benda.koordinat,  benda.sejarah' );
                $builder->join('jenisbenda','jenisbenda.id_jenis_benda = benda.id_jenis_benda');
                $builder->join('pendata', 'pendata.id_pendata = benda.id_pendata');
                $builder->where('benda.id_benda', $id_benda);
                $query = $builder->get();
                
                return $query;
        }
        // 
        public function tampilkoleksi(){
                $db = \Config\Database::connect();
                $builder = $db->table('benda');

                $builder->select('nama_benda, benda.id_benda, benda.id_jenis_benda, jenisbenda.jenis_benda, benda.gambar, benda.gambar2, benda.gambar3, benda.gambar4, lokasi_saat_ini, juru_pemelihara, keterangan, benda.tanggal_ditemukan, benda.kegunaan, benda.koordinat,  benda.sejarah' );
                $builder->join('jenisbenda','jenisbenda.id_jenis_benda = benda.id_jenis_benda');
                $builder->orderBy('id_benda','desc');

                $query = $builder->get();
                
                return $query;
        }        
}