<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
			'category_id' => [
				'type' => 'INT',
				'constraint' => 10,
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
		$this->forge->createTable('products');
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
