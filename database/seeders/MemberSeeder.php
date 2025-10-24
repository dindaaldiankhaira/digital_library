<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::insert([
            ['name' => 'Dinda Aldian Khaira', 'email' => 'dinda@gmail.com', 'phone' => '081234567890'],
            ['name' => 'Anta Nisa Pratama', 'email' => 'anta@gmail.com', 'phone' => '081298765432'],
            ['name' => 'Hatim Abdul Fattah', 'email' => 'hatim@gmail.com', 'phone' => '081222334455'],
        ]);
    }
}
