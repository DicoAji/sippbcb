<?php 

namespace App\Models;

use CodeIgniter\Model;

class MPelapor extends Model
{
        protected $table = 'pelapor';
        
        protected $primaryKey = 'id_pelapor';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_pelapor','nik','nama_pelapor','email', 'alamat_pelapor','nomor_hubung'];  
}