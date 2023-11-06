<?php

namespace App\Models;

use CodeIgniter\Model;

class NasabahModel extends Model
{
    protected $table = 'nasabah';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'no_telepon'];
}