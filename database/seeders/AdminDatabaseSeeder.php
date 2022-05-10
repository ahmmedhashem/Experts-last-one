<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'  => 'Ahmed saleh',
            'email'  => 'ahmed.saleh.dev@gmail.com',
            'password'  => bcrypt('12345678'),

       ]);
    }
}
