<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Variety extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_variety' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'name_variety' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'unit_variety' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'note_variety' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'created_variety' => [
                'type' => 'datetime',   
            ],
            'updated_variety' => [
                'type' => 'datetime',   
            ],
            'deleted_variety' => [
                'type' => 'datetime',   
            ]
        ]);
        $this->forge->addKey('id_variety');
        $this->forge->createTable('Variety');
    }

    public function down()
    {
        $this->forge->dropTable('Variety');
    }
}
