<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
class MahasiswaSeeder extends Seeder { public function run(): void { Mahasiswa::insert([ ['nama'=>'Lutfi','nim'=>'2021001','jurusan'=>'Informatika','angkatan'=>2021,'created_at'=>now(),'updated_at'=>now()], ['nama'=>'Siti','nim'=>'2021002','jurusan'=>'Sistem Informasi','angkatan'=>2021,'created_at'=>now(),'updated_at'=>now()] ]); } }
