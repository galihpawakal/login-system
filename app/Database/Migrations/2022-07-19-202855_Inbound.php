<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inbound extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_items' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'id_inbound' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'po_inbound' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'date_inbound' => [
                'type' => 'date',

            ],
            'qty_inbound' => [
                'type' => 'int',
                'unsigned' => TRUE,
            ],
            'note_inbound' => [
                'type' => 'varchar',
                'constraint' => '50'

            ],
            'created_inbound' => [
                'type' => 'datetime',
            ],
            'updated_inbound' => [
                'type' => 'datetime',
            ],
            'deleted_inbound' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_inbound');
        $this->forge->addForeignKey('id_items', 'items', 'id_items');

        $this->forge->createTable('inbound');
    }

    public function down()
    {
        $this->forge->dropTable('inbound');
    }
}
