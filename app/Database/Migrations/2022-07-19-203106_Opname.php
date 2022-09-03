<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Opname extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id_items' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'id_opname' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,

            ],
            'qty_opname' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'note_opname' => [
                'type' => 'varchar',
                'constraint' => '100'

            ],
            'created_opname' => [
                'type' => 'datetime',
            ],
            'updated_opname' => [
                'type' => 'datetime',
            ],
            'deleted_opname' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_opname');
        $this->forge->addForeignKey('id_items', 'items', 'id_items');


        $this->forge->createTable('opname');
    }
    public function down()
    {
        $this->forge->dropTable('opname');
    }
}
