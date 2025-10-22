<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder {
    public function run(): void {
        User::insert([
            ['name'=>'Admin','email'=>'admin@example.com','password'=>Hash::make('password'),'role'=>'admin','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mahasiswa','email'=>'student@example.com','password'=>Hash::make('password'),'role'=>'mahasiswa','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
