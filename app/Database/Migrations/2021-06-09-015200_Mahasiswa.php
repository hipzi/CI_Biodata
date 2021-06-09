<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_mahasiswa'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nrp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '19',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_telp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jurusan' => [
				'type'           => 'ENUM',
				'constraint'     => "'Teknik Informatika','Sistem Informasi','Teknologi Informasi'",
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_mahasiswa');
		$this->forge->createTable('mahasiswa');
	}

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
