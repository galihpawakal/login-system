<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
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
                'unsigned' => TRUE,
            ],
            'id_items' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'name_items' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'desc_items' => [
                'type' => 'varchar',
                'constraint' => '100'

            ],
            'created_items' => [
                'type' => 'datetime',
            ],
            'updated_items' => [
                'type' => 'datetime',
            ],
            'deleted_items' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_items');
        $this->forge->addForeignKey('id_variety', 'variety', 'id_variety');
        $this->forge->addForeignKey('id_size', 'size', 'id_size');

        $this->forge->createTable('items');
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
