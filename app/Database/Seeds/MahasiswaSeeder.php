<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nrp'          	=>  '05111840000011',
				'nama'          =>  'Anton',
				'no_telp'       =>  '081234555678',
				'alamat'		=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'jurusan'		=>  'Teknik Informatika',
				'created_at' 	=> Time::now()
			]
		];
		$this->db->table('mahasiswa')->insertBatch($data);
	}
}
