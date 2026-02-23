# 📚 Quiz Evaluasi: Controller & Routing (Modul 5)

**Mata Kuliah:** Pemrograman Web Lanjut (Laravel 12)
**Nama:** [Rizky Priyatama Putra Sugito]
**NIM:** [43240461]
**Kampus:** STMIK IKMI Cirebon
Dokumen ini menjelaskan cara menjalankan dan memverifikasi fitur-fitur yang telah diimplementasikan dalam proyek ini.

## Persyaratan

- PHP >= 8.1
- Composer
- Laravel 10/11

## Cara Menjalankan Aplikasi

1. Buka terminal di direktori proyek ini (`c:\xampp\htdocs\SESI 5\Latihan1`).
2. Jalankan server Laravel:
    ```bash
    php artisan serve
    ```
3. Akses aplikasi melalui browser di [http://localhost:8000](http://localhost:8000).

## Fitur dan Cara Verifikasi

### 1. Profil Dosen

Menampilkan informasi profil dosen dan daftar mahasiswa.

- **URL:** [http://localhost:8000/dosen](http://localhost:8000/dosen)
- **Keterangan:** Error "Array to string conversion" pada variabel `$tahun_ajaran` telah diperbaiki dengan mengubah tipe data menjadi string di `InfoController`.

### 2. Daftar Koleksi Buku (Resource Controller)

Menampilkan daftar buku menggunakan `BukuController@index` dan view `perpus_index.blade.php`.

- **URL:** [http://localhost:8000/koleksi](http://localhost:8000/koleksi)
- **Fitur:** Menggunakan `@foreach` untuk menampilkan data array buku dari controller.

### 3. Detail Buku

Menampilkan detail buku berdasarkan ID menggunakan parameter pada URL.

- **URL:** [http://localhost:8000/koleksi/101](http://localhost:8000/koleksi/101) (Ganti `101` dengan ID lain)
- **Output:** "Anda sedang melihat detail buku dengan Kode: [ID]"

## Daftar Rute (Routes)

Anda dapat melihat semua rute yang tersedia dengan perintah:

```bash
php artisan route:list
```

Rute `/koleksi` telah terdaftar sebagai **Resource Route** yang mencakup:

- GET `/koleksi` (index)
- GET `/koleksi/create` (create)
- POST `/koleksi` (store)
- GET `/koleksi/{id}` (show)
- GET `/koleksi/{id}/edit` (edit)
- PUT/PATCH `/koleksi/{id}` (update)
- DELETE `/koleksi/{id}` (destroy)
