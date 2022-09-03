<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Size extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_variety' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'id_size' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'name_size' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'note_size' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'created_size' => [
                'type' => 'datetime',
            ],
            'updated_size' => [
                'type' => 'datetime',
            ],
            'deleted_size' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_size');
        //  $this->forge->addForeignKey('id_var', 'variety', 'id_variety');
        $this->forge->addForeignKey('id_variety', 'variety', 'id_variety');

        $this->forge->createTable('size');
    }

    public function down()
    {
        $this->forge->dropTable('size');
    }
}
