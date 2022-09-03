<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reminder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_items' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'id_reminder' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,

            ],
            'qty_reminder' => [
                'type' => 'int',
                'constraint' => '11',
                'unsigned' => TRUE,
            ],
            'note_reminder' => [
                'type' => 'varchar',
                'constraint' => '100'

            ],
            'created_reminder' => [
                'type' => 'datetime',
            ],
            'updated_reminder' => [
                'type' => 'datetime',
            ],
            'deleted_reminder' => [
                'type' => 'datetime',
            ]
        ]);

        $this->forge->addPrimaryKey('id_reminder');
        $this->forge->addForeignKey('id_items', 'items', 'id_items');


        $this->forge->createTable('reminder');
    }

    public function down()
    {
        $this->forge->dropTable('reminder');
    }
}
