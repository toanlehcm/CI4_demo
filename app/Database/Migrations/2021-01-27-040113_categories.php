<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'category_title' => [
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => true
			],
			'date_created' => [
				'type' => 'datetime',
				'null' => true
			],
			'date_modified' => [
				'type' => 'datetime',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('categories');
	}

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
