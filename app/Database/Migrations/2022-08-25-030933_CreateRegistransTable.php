<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistransTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'fullname' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'birth' => [
				'type' => 'DATE',
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'gender' => [
				'type' => 'ENUM',
				'constraint' => ['L', 'P'],
			],
			'religion' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],
			'graduated_from' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'ipk' => [
				'type' => 'FLOAT',
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('registrants', true);
    }

    public function down()
    {
        $this->forge->dropTable('registrants');
    }
}
