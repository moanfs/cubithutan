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
            'desc'      => 'Admin bertugas untuk mengatur konten',
        ];
        $this->db->table('auth_group')->insert($data);

        $data = [
            'name'      => 'Consoler',
            'desc'      => 'Consoler yang bertugas untuk memberikan konseling',
        ];
        $this->db->table('auth_group')->insert($data);

        $data = [
            'name'      => 'User',
            'desc'      => 'Pengguna yang ingin konseling',
        ];
        $this->db->table('auth_group')->insert($data);

        $data = [
            'id_group' => '1',
            'slug' => 'Cubit-Hutan',
            'email'    => 'cubithutan@gmail.com',
            'fullname' => 'Cubit Hutan',
            'callname' => 'cuhut',
            'active'    => '1',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
        $data = [
            'id_group' => '2',
            'slug' => 'Consoler-Pertama',
            'email'    => 'consoler@mail.com',
            'fullname' => 'Consoler Pertama',
            'callname' => 'consoler',
            'active'    => '1',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
        $data = [
            'id_group' => '3',
            'slug' => 'User-Coba',
            'email'    => 'user@mail.com',
            'fullname' => 'User Coba',
            'callname' => 'coba',
            'active'    => '1',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
    }
}
