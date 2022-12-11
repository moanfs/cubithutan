<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username', 'first_name', 'last_name', 'email', 'pass_hash', 'phone', 'tempat_lahir', 'tanggal_lahir', 'jenis_klamin', 'alamat',
        'img_profile', 'active', 'created_at', 'updated_at', 'deleted_at'
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

    public function getAllPengguna()
    {
        return $this->db->table('users')
            ->join('auth_user_group', 'auth_user_group.user_id=users.id')
            ->join('auth_group', 'auth_group.group_id=auth_user_group.group_id')
            ->where('auth_group.group_id', '3')
            ->get()->getResultArray();
    }

    public function getAllKonsoler()
    {
        return $this->db->table('users')
            ->join('auth_user_group', 'auth_user_group.user_id=users.id')
            ->join('auth_group', 'auth_group.group_id=auth_user_group.group_id')
            ->where('auth_group.group_id', '2')
            ->get()->getResultArray();
    }

    public function getUser()
    {
        return $this->db->table('users')
            ->join('auth_user_group', 'auth_user_group.user_id=users.id')
            ->join('auth_group', 'auth_group.group_id=auth_user_group.group_id')
            ->where('id', session('id'))
            ->get()->getRowArray();
    }
}
