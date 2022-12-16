<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'materi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'slug', 'name', 'img', 'desc', 'created_at', 'updated_at', 'deleted_at'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function setMateri($data_materi)
    {
        $this->db->table('materi')->insert($data_materi);
    }

    public function getMateri()
    {
        return $this->db->table('materi')
            ->get()->getResultArray();
    }

    public function getMaterione($id)
    {
        return $this->db->table('materi')
            ->where('id', $id)
            ->get()->getRowArray();
    }
    // delete podcast
    public function getDelete($id)
    {
        $this->db->table('materi')
            ->where('id', $id)
            ->delete();
    }

    // user

}
