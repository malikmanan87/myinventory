<?php

namespace App\Models;

use CodeIgniter\Model;

class Role_Model extends Model
{
    protected $table      = 'access';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['email', 'level'];

    public function getEmail($username)
    {
        return $this->where('email', $username)->findAll();
    }
}
