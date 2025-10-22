<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorSeeder extends Seeder { public function run(): void { Author::insert([ ['name'=>'J.K. Rowling','country'=>'UK','created_at'=>now(),'updated_at'=>now()], ['name'=>'Agatha Christie','country'=>'UK','created_at'=>now(),'updated_at'=>now()], ['name'=>'George Orwell','country'=>'UK','created_at'=>now(),'updated_at'=>now()], ['name'=>'Jane Austen','country'=>'UK','created_at'=>now(),'updated_at'=>now()], ['name'=>'Stephen King','country'=>'US','created_at'=>now(),'updated_at'=>now()], ]); } }
