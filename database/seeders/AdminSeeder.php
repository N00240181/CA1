<?php
 
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create the user insert
        User::create([
        'name' => 'Admin User',
        'email' => 'admin' . time() . '@example.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
        ]);
    }
}