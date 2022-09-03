<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Outbound extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nik_employee' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'id_items' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'id_outbound' => [
                'type' => 'int',
                'constraint' => '11',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'po_outbound' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'date_outbound' => [
                'type' => 'date',

            ],
            'qty_outbound' => [
                'type' => 'int',
            ],
            'note_outbound' => [
                'type' => 'varchar',
                'constraint' => '50'

            ],
            'created_outbound' => [
                'type' => 'datetime',
            ],
            'updated_outbound' => [
                'type' => 'datetime',
            ],
            'deleted_outbound' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_outbound');
        $this->forge->addForeignKey('nik_employee', 'employee', 'nik_employee');
        $this->forge->addForeignKey('id_items', 'items', 'id_items');

        $this->forge->createTable('outbound');
    }

    public function down()
    {
        $this->forge->dropTable('outbound');
    }
}
