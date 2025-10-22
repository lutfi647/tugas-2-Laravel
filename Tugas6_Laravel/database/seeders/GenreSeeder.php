<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Genre;
class GenreSeeder extends Seeder { public function run(): void { Genre::insert([ ['name'=>'Fiction','created_at'=>now(),'updated_at'=>now()], ['name'=>'Romance','created_at'=>now(),'updated_at'=>now()], ['name'=>'Sci-Fi','created_at'=>now(),'updated_at'=>now()], ['name'=>'Mystery','created_at'=>now(),'updated_at'=>now()], ['name'=>'Fantasy','created_at'=>now(),'updated_at'=>now()], ]); } }
