<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stock extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_variety' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,

            ],
            'id_stock' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'qty_stock' => [
                'type' => 'int',
                'constraint' => '11',


            ],
            'note_stock' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],

            'created_stock' => [
                'type' => 'datetime',
            ],
            'updated_stock' => [
                'type' => 'datetime',
            ],
            'deleted_stock' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_stock');
        $this->forge->addForeignKey('id_variety', 'variety', 'id_variety');

        $this->forge->createTable('stock');
    }

    public function down()
    {
        $this->forge->dropTable('stock');
    }
}
