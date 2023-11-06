<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $useTimestamps = true;
    protected $allowedFields = ['nasabah_id', 'petugas_id', 'called'];
}