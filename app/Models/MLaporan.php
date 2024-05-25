<?php 

namespace App\Models;

use CodeIgniter\Model;

class MLaporan extends Model
{
        protected $table = 'laporan';
        
        protected $primaryKey = 'id_laporan';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_laporan', 'id_benda',  'id_pelapor', 'desa_penemuan','dusun_penemuan','rt_penemuan','rw_penemuan', 'kec_penemuan', 'tanggal_penemuan','kecamatan', 'status','gambar','gambar2','gambar3','gambar4'];

        public function getLaporan($id_laporan = null){
                
                $db = \Config\Database::connect();
                
                if ($id_laporan != null){
                        $query = $db->query("SELECT * from laporan where id_lapporan = ".$id_laporan."");   
                }
                
                else{
                        $query = $db->query("SELECT laporan.id, laporan.tanggal_laporan, laporan.tanggal_penemuan, laporan.desa_penemuan, laporan.dusun_penemuan, laporan.rt_penemuan, laporan.rw_penemuan, laporan.kec_penemuan, laporan.status, laporan.gambar, laporan.gambar2, laporan.gambar3, laporan.gambar4 from laporan");
                }
                return $query;

        }

        public function tampillaporan(){
                $db = \Config\Database::connect();

                $builder = $db->table('laporan');
                $builder->select('pelapor.nama_pelapor, id_laporan, pelapor.nik, pelapor.email, tanggal_penemuan, status, pelapor.nomor_hubung, laporan.gambar, laporan.gambar2, laporan.gambar3, laporan.gambar4, laporan.desa_penemuan, laporan.dusun_penemuan, laporan.rt_penemuan, laporan.rw_penemuan, laporan.kec_penemuan');
                $builder->join('pelapor','pelapor.id_pelapor = laporan.id_pelapor');
                $builder->orderBy('id_laporan','desc');
                $query = $builder->get();
                
                return $query;
        }

        public function ubahstatus($id_laporan){
                $db = \Config\Database::connect();

                $builder = $db->table('laporan');
                $builder->select('id_laporan, pelapor.nik, laporan.desa_penemuan,  laporan.dusun_penemuan, laporan.rt_penemuan, laporan.rw_penemuan, laporan.kec_penemuan, laporan.gambar, laporan.gambar2, laporan.gambar3, laporan.gambar4, pelapor.nama_pelapor, status');

                $builder->join('pelapor','pelapor.id_pelapor = laporan.id_pelapor');
                $builder->where('laporan.id_laporan ', $id_laporan);
                $query = $builder->get();
                
                return $query;
        }  
        public function koleksiLaporan($id_laporan){
                $db = \Config\Database::connect();

                $builder = $db->table('laporan');
                $builder->select('id_laporan, pelapor.nik, laporan.gambar, laporan.tanggal_penemuan, laporan.gambar2, laporan.desa_penemuan, laporan.dusun_penemuan, laporan.rt_penemuan, laporan.rw_penemuan, laporan.kec_penemuan, laporan.gambar3, laporan.gambar4, pelapor.nama_pelapor, status');
                $builder->join('pelapor','pelapor.id_pelapor = laporan.id_pelapor');
                $builder->where('laporan.id_laporan ', $id_laporan);
                $query = $builder->get();
                
                return $query;
        }  

}