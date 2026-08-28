<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateForms extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'event_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 191,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'submit_label' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Daftar',
            ],
            'success_message' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'active',
                'comment'    => 'active | inactive',
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('event_id');
        $this->forge->addForeignKey('event_id', 'fb_events', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fb_forms');
    }

    public function down()
    {
        $this->forge->dropTable('fb_forms');
    }
}
