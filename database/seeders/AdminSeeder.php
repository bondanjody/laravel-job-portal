<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $neAdmin = new Admin();
        $neAdmin->name = 'Super Admin';
        $neAdmin->email = 'superadmin1@test.com';
        $neAdmin->password = bcrypt('12345678');
        $neAdmin->save();
    }
}
