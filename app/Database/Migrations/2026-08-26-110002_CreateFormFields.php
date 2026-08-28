<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFormFields extends Migration
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
            'form_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'label' => [
                'type'       => 'VARCHAR',
                'constraint' => 191,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'comment'    => 'Machine name / column key (unique per form)',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'text',
                'comment'    => 'text|email|tel|url|number|date|textarea|select|radio|checkbox|hidden',
            ],
            'placeholder' => [
                'type'       => 'VARCHAR',
                'constraint' => 191,
                'null'       => true,
            ],
            'help_text' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'options' => [
                'type' => 'TEXT',
                'null' => true,
                'comment' => 'JSON encoded options for select/radio/checkbox',
            ],
            'required' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
            ],
            'validation' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'comment'    => 'Additional CI4 validation rules',
            ],
            'sort_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('form_id', 'fb_forms', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fb_form_fields');
    }

    public function down()
    {
        $this->forge->dropTable('fb_form_fields');
    }
}
