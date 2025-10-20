#  Tugas 2 & 3 Laravel — Fremwork Laravel

Proyek ini merupakan hasil pengerjaan **Tugas 2,3 dan Tugas 4 mata kuliah Fremwork Laravel, menggunakan aravel Framework sebagai backend utama.  
Tujuan dari proyek ini adalah untuk memahami dasar pengembangan aplikasi berbasis **MVC (Model-View-Controller)**, penerapan **routing**, serta implementasi **database migration dan seeding** di Laravel.

---

## 🛠️ Teknologi yang Digunakan
- **Laravel Framework 5.x / 8.x**
- **PHP 8.2**
- **Composer**
- **SQLite / MySQL Database**
- **Bootstrap (Frontend)**
- **Visual Studio Code**


## Struktur Direktori Utama

app/ → Logika utama aplikasi (Controller, Model, Middleware)
bootstrap/ → Inisialisasi dan autoload Laravel
config/ → File konfigurasi aplikasi
database/ → File migration, seeder, dan database SQLite
public/ → Folder publik (index.php)
resources/ → Tampilan Blade dan aset frontend
routes/ → File routing (web.php, api.php)
storage/ → Cache, logs, dan file sementara
vendor/ → Dependency Composer
.env → Konfigurasi environment (database, app key, dll)

Rincian Tugas
🔹 Tugas 2 — Pengenalan Laravel

Memahami struktur folder Laravel.

Membuat route dan controller sederhana.

Menampilkan data dari controller ke view.

Implementasi dasar Blade Template.

🔹 Tugas 3 — Database Migration & Seeder

Membuat migration untuk struktur tabel.

Menggunakan model untuk interaksi database.

Menambahkan data awal (seeder).

Menjalankan perintah migrate dan seed untuk inisialisasi data.

Membuat tampilan sederhana untuk menampilkan data.

Tugas 4 — REST API dengan Laravel

Membuat model dan controller untuk resource (misalnya: Book dan Author).

Menambahkan endpoint API menggunakan routes/api.php.

Mengimplementasikan method index() untuk menampilkan semua data.

Mengimplementasikan method store() untuk menambah data baru dengan validasi.

Menggunakan Postman untuk menguji endpoint GET dan POST.

Mengatur database menggunakan SQLite agar mudah dijalankan tanpa konfigurasi server tambahan.

Menjalankan perintah php artisan serve dan memastikan API dapat diakses melalui
