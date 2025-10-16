Laravel 8 full (skeleton) ready for installer

Steps to get running after extracting this zip into e.g. C:\xampp\htdocs\laravel8_full_task:

1. Open terminal in project folder (where composer.json is).
2. Run: composer install
   - This will download vendor and framework files.
3. Copy .env.example to .env and set DB path to database/database.sqlite (default in .env.example)
   - On Windows you can set DB_DATABASE=/absolute/path/to/database/database.sqlite or use relative.
4. Generate app key:
   php artisan key:generate
5. Run migrations and seeders:
   php artisan migrate --seed
6. Serve app:
   php artisan serve
7. Open browser:
   http://localhost:8000/books
   http://localhost:8000/authors

If you prefer MySQL, edit .env to DB_CONNECTION=mysql and set DB credentials, then create empty database in phpMyAdmin before migrate.
