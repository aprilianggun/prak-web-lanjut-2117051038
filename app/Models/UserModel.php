<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function saveUser($data)
    {
        $this->insert($data);
    }

    public function getUser($id = null)
    {
        if ($id != null) {
            return $this->select('user.*, kelas.nama_kelas')
                ->join('kelas', 'kelas.id = user.id_kelas')->find($id);
        }
        return $this->select('user.*, kelas.nama_kelas')
            ->join('kelas', 'kelas.id = user.id_kelas')->findAll();
    }

    public function updateUser($data, $id) {
        return $this->update($id, $data);
    }

    public function deleteUser($id) {
        return $this->delete($id);
    }

    protected $DBGroup = 'default';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'npm', 'id_kelas', 'foto'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}