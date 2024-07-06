<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'IdUser';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\User';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'username',
        'whatsapp',
        'password',
        'saldo',
        'created_date',
        'created_time',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama'=> 'required',
        'username'=> 'required|min_length[5]|is_unique[user.username]',
        'whatsapp'=> 'required',
        'password'=> 'required|min_length[8]',
        'password_confirm' => 'required|matches[password]',
        'saldo'=> 'required',
        'created_date'=> 'required',
        'created_time'=> 'required',
    ];
    protected $validationMessages   = [
        'nama'=> [
            'required' => 'Silahkan masukkan nama',
        ],
        'username'=> [
            'required' => 'Silahkan masukkan username',
            'min_length' => 'Username minimal 5 karakter',
            'is_unique' => 'Username sudah terdaftar silahkan masukkan username lain'
        ],
        'whatsapp'=> [
            'required' => 'Silahkan masukkan whatsapp',
        ],
        'password'=> [
            'required' => 'Silahkan masukkan password ',
            'min_length' => 'Password minimal 8 karakter',
        ],
        'password_confirm'=> [
            'required' => 'Silahkan masukkan password kembali ',
            'matches' => 'Pastikan password sama',
        ],
        'saldo'=> [
            'required' => 'Silahkan masukkan saldo',
        ],
        'created_date'=> [
            'required' => 'Silahkan masukkan tanggal dibuat',
        ],
        'created_time'=> [
            'required' => 'Silahkan masukkan waktu dibuat',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
