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
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125],
            'first_name'        => ['type' => 'VARCHAR', 'constraint' => 125],
            'last_name'         => ['type' => 'VARCHAR', 'constraint' => 125],
            'email'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'phone'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'tempat_lahir'      => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'tanggal_lahir'     => ['type' => 'date', 'null' => true],
            'jenis_klamin'      => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'alamat'            => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'pass_hash'         => ['type' => 'varchar', 'constraint' => 125,],
            'profile_consoler'  => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'desc_consoler'     => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'active_consoler'   => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
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
            'type'              => ['type' => 'int', 'constraint' => 11],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('layout', true);

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'img'               => ['type' => 'varchar', 'constraint' => 225],
            'desc'              => ['type' => 'varchar', 'constraint' => 225, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('materi', true);

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'link'              => ['type' => 'varchar', 'constraint' => 225],
            'desc'              => ['type' => 'varchar', 'constraint' => 225, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('podcast', true);

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'icon'              => ['type' => 'varchar', 'constraint' => 225],
            'desc'              => ['type' => 'varchar', 'constraint' => 225, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('curhat', true);
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'icon'              => ['type' => 'varchar', 'constraint' => 225],
            'desc'              => ['type' => 'varchar', 'constraint' => 225, 'null' => true],
            'type'              => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('konseling', true);
    }

    public function down()
    {
        //
    }
}
