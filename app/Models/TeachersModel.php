<?php

namespace App\Models;

use CodeIgniter\Model;

class TeachersModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_guru';
    protected $primaryKey       = 'db_idguru';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['db_nisn','db_namaguru','db_namauser','db_password'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false; 
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function getTeachers($idguru = false)
    {
        if($idguru == false)
        {
            return $this->findAll();
        }

        return $this->where(['db_idguru'=>$idguru])->first();
    }
}
