<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrations extends Migration
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
            'form_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'new',
                'comment'    => 'new | confirmed | cancelled',
            ],
            'submitted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => 45,
                'null'       => true,
            ],
            'user_agent' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('event_id', 'fb_events', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('form_id', 'fb_forms', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fb_registrations');
    }

    public function down()
    {
        $this->forge->dropTable('fb_registrations');
    }
}
