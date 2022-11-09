<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CubitSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            'name'      => 'Admin',
            'desc'      => 'Admin Bertuas untuk',
        ];
        $this->db->table('auth_group')->insert($data);

        $data = [
            'name'      => 'Consoler',
            'desc'      => 'Admin Bertuas untuk',
        ];
        $this->db->table('auth_group')->insert($data);

        $data = [
            'username' => 'darth',
            'email'    => 'darth@theempire.com',
        ];
        $this->db->table('users')->insert($data);
    }
}
