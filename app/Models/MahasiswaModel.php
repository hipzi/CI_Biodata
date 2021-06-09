<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
	// protected $DBGroup              = 'default';
	protected $table                = 'mahasiswa';
	protected $primaryKey           = 'id_mahasiswa';
	// protected $useAutoIncrement     = true;
	// protected $insertID             = 0;
	protected $returnType           = 'object';
	// protected $useSoftDeletes       = false;
	// protected $protectFields        = true;
	protected $allowedFields        = ['id_mahasiswa','nrp','nama','no_telp','alamat','jurusan'];

	// // Dates
	protected $useTimestamps        = true;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// // Validation
	// protected $validationRules      = [];
	// protected $validationMessages   = [];
	// protected $skipValidation       = false;
	// protected $cleanValidationRules = true;

	// // Callbacks
	// protected $allowCallbacks       = true;
	// protected $beforeInsert         = [];
	// protected $afterInsert          = [];
	// protected $beforeUpdate         = [];
	// protected $afterUpdate          = [];
	// protected $beforeFind           = [];
	// protected $afterFind            = [];
	// protected $beforeDelete         = [];
	// protected $afterDelete          = [];

	
}
