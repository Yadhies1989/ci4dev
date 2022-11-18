<?php

namespace App\Models;

use CodeIgniter\Model;

class RadiusModel extends Model
{
    protected $table      = 'tbl_biaya_gugatan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
}
