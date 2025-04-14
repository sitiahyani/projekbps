<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'admin_nama' => 'superadmin',
            'admin_password' => Hash::make('admin12345'),
        ]);
    }
}