<?php

namespace App\Models;

use CodeIgniter\Model;

class DatasetModel extends Model
{
    protected $table            = 'tb_data';
    protected $primaryKey       = 'id_data';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['data'];

    public function getDataset($id_data = false)
    {
        if ($id_data == false) {
            return $this->findAll();
        }
        return $this->where(['id_data' => $id_data])->first();
    }
}
