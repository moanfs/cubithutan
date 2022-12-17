<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CubitHutan extends Migration
{
    public function up()
    {
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
         * tabel user
         */
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
            'id_group'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125],
            'fullname'          => ['type' => 'VARCHAR', 'constraint' => 125],
            'callname'          => ['type' => 'VARCHAR', 'constraint' => 125],
            'email'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'phone'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'pendidikan'        => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'agama'             => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'anakke'            => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'tempat_lahir'      => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'tanggal_lahir'     => ['type' => 'date', 'null' => true],
            'jenis_klamin'      => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'alamat'            => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'pass_hash'         => ['type' => 'varchar', 'constraint' => 125,],
            'profile_consoler'  => ['type' => 'varchar', 'constraint' => 125, 'default' => 'default.png'],
            'desc_consoler'     => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'kuliah'            => ['type' => 'varchar', 'constraint' => 125, 'null' => true],
            'active_consoler'   => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'img_profile'       => ['type' => 'varchar', 'constraint' => 125, 'default' => 'profile.png'],
            'active'            => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('id_group');
        $this->forge->addForeignKey('id_group', 'auth_group', 'group_id', '', 'CASCADE');
        $this->forge->createTable('users');

        /**
         * tabel podcast
         */
        $this->forge->addField([
            'id_epi'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'              => ['type' => 'varchar', 'constraint' => 125],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],

        ]);
        $this->forge->addKey('id_epi', true);
        $this->forge->createTable('episode', true);

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_episode'        => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 125, 'null' => true],
            'link'              => ['type' => 'varchar', 'constraint' => 500],
            'session'           => ['type' => 'VARCHAR', 'constraint' => 125],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('id_episode');
        $this->forge->addForeignKey('id_episode', 'episode', 'id_epi', '', 'CASCADE');
        $this->forge->createTable('podcast', true);



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
