<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas';
    protected $useTimestamps = true;
    protected $allowedFields = ['role', 'password'];
}