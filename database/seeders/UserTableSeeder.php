<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $newAdmin = new User();

        $newAdmin->name = 'Emilio';
        $newAdmin->surname = 'Gallo';
        $newAdmin->email = 'admin@thebazaarassistant.com';
        $newAdmin->password = Hash::make('Primo_Progetto_Full_111');

        $newAdmin->save();
    }
}
