<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IdUser' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'whatsapp' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'saldo' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
            'created_date' => [
                'type' => 'date',
                'null' => false,
            ],
            'created_time' => [
                'type' => 'time',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('IdUser', true);
        $this->forge->createTable('User');
    }

    public function down()
    {
        $this->forge->dropTable('User');
    }
}
