<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CubitHutan extends Migration
{
    public function up()
    {
        /**
         * tabel user
         */
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
            'username'          => ['type' => 'VARCHAR', 'constraint' => 125, 'constraint' => '100'],
            'email'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'phone'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'pass_hash'         => ['type' => 'varchar', 'constraint' => 125,],
            'img_profile'       => ['type' => 'varchar', 'constraint' => 125, 'default' => 'profile.png'],
            'active'            => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
        /**
         * tabel group
         */
        $this->forge->addField([
            'group_id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'desc'              => ['type' => 'varchar', 'constraint' => 225],
        ]);
        $this->forge->addKey('group_id', true);
        $this->forge->createTable('auth_group', true);
        /**
         * Auth Group
         */
        $this->forge->addField([
            'group_id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'user_id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addKey(['group_id', 'user_id']);
        $this->forge->addForeignKey('group_id', 'auth_group', 'group_id', '', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('auth_user_group', true);
        /**
         * tabel layout
         */
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'layout'            => ['type' => 'varchar', 'constraint' => 225],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('layout', true);
    }

    public function down()
    {
        //
    }
}
