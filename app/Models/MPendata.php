<?php 

namespace App\Models;

use CodeIgniter\Model;

class MPendata extends Model
{
        protected $table = 'pendata';
        
        protected $primaryKey = 'id_pendata';  
        protected $useAutoIncrement = true;  
        protected $allowedFields = ['id_pendata','pendata','waktu_pendataan'];  
}