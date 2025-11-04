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
        'name' => 'admin',
        'email' => 'admin' . time() . '@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
        ]);
    }
}