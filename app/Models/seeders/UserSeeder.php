<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        if( is_null($user) ){
            $user = new User();
            $user->name     = "admin";
            $user->email    = "admin@admin.com";
            $user->password = Hash::make('admin');
            $user->save();
        }
    }
}
