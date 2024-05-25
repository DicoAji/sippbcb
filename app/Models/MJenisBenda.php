<?php 

namespace App\Models;

use CodeIgniter\Model;

class MJenisBenda extends Model
{
        protected $table = 'jenisbenda';
        
        protected $primaryKey = 'id_jenis_benda';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_jenis_benda','jenis_benda'];   
}