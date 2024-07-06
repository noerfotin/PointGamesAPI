<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            [
            'nama' => 'Noer Fotin',
            'username' => 'fotin',
            'whatsapp' => '085875462977',
            'password' => 'fotin1',
            'saldo' => 100000,
            'created_date' => '2024-07-05',
            'created_time' => '19:00',
                ],
            [
                'nama' => 'Noer Fotin O',
                'username' => 'fotin1',
                'whatsapp' => '085875462978',
                'password' => 'fotin12',
                'saldo' => 80000,
                'created_date' => '2024-07-05',
                'created_time' => '19:15',
                ],
            [
            'nama' => 'Noer Fotin Octavia',
            'username' => 'fotin12',
            'whatsapp' => '085875462977',
            'password' => 'fotin123',
            'saldo' => 150000,
            'created_date' => '2024-07-05',
            'created_time' => '19:30',
                ],
            [
            'nama' => 'Noer Fotin Octa',
            'username' => 'fotin123',
            'whatsapp' => '085875462977',
            'password' => 'fotin1234',
            'saldo' => 70000,
            'created_date' => '2024-07-05',
            'created_time' => '20:00',
            ],

        ];

        $this->db->table('User')->insertBatch($data);
    }
}
