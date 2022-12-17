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
        'id_group', 'slug', 'fullname', 'callname', 'email', 'phone', 'pendidikan', 'agama',  'anakke',  'tempat_lahir', 'tanggal_lahir',  'jenis_klamin',
        'alamat', 'pass_hash', 'img_profile', 'active', 'kuliah', 'active_consoler', 'desc_consoler', 'profile_consoler', 'created_at', 'updated_at', 'deleted_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;


    public function getAllPengguna()
    {
        return $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id=users.id_group')
            ->where('auth_group.group_id', '3')
            ->get()->getResultArray();
    }

    // consoler cubit hutan admin
    public function getAllKonsoler()
    {
        return $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id=users.id_group')
            ->where('auth_group.group_id', '2')
            ->get()->getResultArray();
    }

    // consoler cubit hutan user
    public function getAllKonsolerUser()
    {
        return $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id=users.id_group')
            ->where('auth_group.group_id', '2')
            ->where('active_consoler', '1')
            ->get()->getResultArray();
    }

    public function getPengguna($id)
    {
        return $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id=users.id_group')
            ->where('id', $id)
            ->get()->getRowArray();
    }
    public function getUser()
    {
        return $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id=users.id_group')
            ->where('id', session('id'))
            ->get()->getRowArray();
    }
}
