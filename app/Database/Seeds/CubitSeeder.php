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
            'username' => 'cubithutan',
            'email'    => 'cubithutan@gmail.com',
            'first_name' => 'Cubit',
            'last_name' => 'Hutan',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
        $data = [
            'username' => 'consoler',
            'email'    => 'consoler@mail.com',
            'first_name' => 'Consoler',
            'last_name' => 'Pertama',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);
        $data = [
            'username' => 'user',
            'email'    => 'user@mail.com',
            'first_name' => 'User',
            'last_name' => 'Coba',
            'pass_hash' => password_hash('12345', PASSWORD_DEFAULT)
        ];
        $this->db->table('users')->insert($data);

        $data = [
            'group_id' => '1',
            'user_id' => '1'
        ];
        $this->db->table('auth_user_group')->insert($data);
        $data = [
            'group_id' => '2',
            'user_id' => '2'
        ];
        $this->db->table('auth_user_group')->insert($data);
        $data = [
            'group_id' => '3',
            'user_id' => '3'
        ];
        $this->db->table('auth_user_group')->insert($data);
    }
}
