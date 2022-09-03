<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nik_employee' => [
                'type'  => 'VARCHAR',
                'constraint' => '50', 
            ],
            'name_employee' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'gender_employee' => [
                'type' => 'ENUM',
                'constraint' => ['P', 'L'],
                'default'        => 'L',
            ],

            'phone_employee' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],            
            'div_employee' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'position_employee' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'note_employee' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_employee' => [
                'type' => 'DATETIME',   
                'NULL' => TRUE,
            ],
            'updated_employee' => [
                'type' => 'DATETIME',   
                'NULL' => TRUE,

            ],
            'deleted_employee' => [
                'type' => 'DATETIME',   
                'NULL' => TRUE,

            ]
        ]);
        $this->forge->addPrimaryKey('nik_employee', true);
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    } 
}
