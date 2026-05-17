# SIAKAD - Sistem Informasi Akademik

SIAKAD (Sistem Informasi Akademik) adalah aplikasi manajemen akademik berbasis web yang dibangun menggunakan Laravel. Sistem ini menyediakan fitur lengkap untuk mengelola data fakultas, dosen, mahasiswa, mata kuliah, dan sistem KRS (Kartu Rencana Studi) dengan antarmuka yang elegan dan responsif.

## Fitur Utama

### 📊 Dashboard
- Statistik ringkas: Total Fakultas, Dosen, Mahasiswa Aktif, dan Mata Kuliah
- Antarmuka yang bersih dan profesional dengan desain monochrome

### 🏫 Manajemen Fakultas
- CRUD (Create, Read, Update, Delete) untuk data fakultas
- Relasi dengan dosen dan mahasiswa

### 👨‍🏫 Manajemen Dosen
- CRUD lengkap untuk data dosen
- Informasi NIP, nama, dan fakultas
- **Detail Dosen**: Halaman khusus dengan layout 2 kolom
  - Kolom kiri: Data diri dosen (NIP, Nama, Fakultas, Jumlah Mahasiswa Bimbingan)
  - Kolom kanan: Daftar mahasiswa aktif yang dibimbing
- Kolom "Jumlah Mahasiswa" menampilkan jumlah mahasiswa aktif

### 🎓 Manajemen Mahasiswa
- CRUD lengkap untuk data mahasiswa
- Field: NIM, Nama, Email, Fakultas, Pembimbing Akademik, Status
- **Status Mahasiswa**: Aktif / Tidak Aktif (mempengaruhi filter di berbagai bagian sistem)
- **Detail Mahasiswa**: Halaman khusus dengan layout 2 kolom
  - Kolom kiri: Data diri (NIM, Nama, Email, Fakultas, PA, Status)
  - Kolom kanan: Daftar mata kuliah yang diambil + Total SKS
- **Filter PA Dinamis**: Dropdown pembimbing akademik hanya menampilkan dosen dari fakultas yang dipilih

### 📚 Manajemen Mata Kuliah
- CRUD lengkap untuk mata kuliah
- Field: Kode, Nama, SKS (Satuan Kredit Semester)

### 📋 Manajemen KRS (Kartu Rencana Studi)
- Halaman index menampilkan daftar mahasiswa dengan:
  - Kolom "Mata Kuliah": List courses yang diambil
  - Kolom "Total SKS": Jumlah SKS yang sudah diambil
  - Tombol "Kelola": Untuk mengedit KRS
- Halaman edit dengan:
  - Multi-select checkbox untuk memilih mata kuliah
  - Perhitungan real-time total SKS
  - Scrollable container untuk kemudahan navigasi

## Teknologi yang Digunakan

- **Framework**: Laravel 11
- **Database**: MySQL
- **Backend**: PHP 8.3+
- **Frontend**: Blade Templating
- **Styling**: Inline CSS (Monochrome Design)
- **JavaScript**: Vanilla JS untuk interaktivitas

## Requirements

- PHP 8.3 atau lebih tinggi
- Composer
- MySQL 5.7 atau lebih tinggi
- Laragon (atau environment lokal lainnya)

## Instalasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd Irza_40
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan konfigurasi database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siakad
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migration & Seeding
```bash
php artisan migrate:fresh --seed
```

### 6. Jalankan Development Server
```bash
php artisan serve
```

Akses aplikasi di: `http://127.0.0.1:8000`

## Struktur Folder

```
app/
├── Http/
│   └── Controllers/
│       ├── DashboardController.php
│       ├── Fakultas/FakultasController.php
│       ├── Dosen/DosenController.php
│       ├── Mahasiswa/MahasiswaController.php
│       ├── MataKuliah/MataKuliahController.php
│       └── Krs/KrsController.php
└── Models/
    ├── Fakultas.php
    ├── Dosen.php
    ├── Mahasiswa.php
    ├── MataKuliah.php
    └── Krs.php

resources/
└── views/
    ├── layouts/app.blade.php (Master layout dengan CSS)
    ├── dashboard/index.blade.php
    ├── fakultas/
    ├── dosen/ (index, create, edit, show)
    ├── mahasiswa/ (index, create, edit, show)
    ├── mata_kuliah/
    └── krs/

database/
├── migrations/
│   ├── 2026_01_01_000001_create_fakultas_table.php
│   ├── 2026_01_01_000002_create_dosens_table.php
│   ├── 2026_01_01_000003_create_mahasiswas_table.php
│   ├── 2026_01_01_000004_create_mata_kuliahs_table.php
│   └── 2026_01_01_000005_create_krses_table.php
└── seeders/
    ├── DatabaseSeeder.php
    ├── FakultasSeeder.php
    ├── DosenSeeder.php
    ├── MahasiswaSeeder.php
    └── MataKuliahSeeder.php

routes/
└── web.php
```

## Database Schema

### Tabel: fakultas
- `id` (Primary Key)
- `nama` (String, Unique)
- `timestamps`

### Tabel: dosens
- `id` (Primary Key)
- `nip` (String, Unique)
- `nama` (String)
- `fakultas_id` (Foreign Key → fakultas)
- `timestamps`

### Tabel: mahasiswas
- `id` (Primary Key)
- `nim` (String, Unique)
- `nama` (String)
- `email` (String, Unique)
- `fakultas_id` (Foreign Key → fakultas)
- `dosen_id` (Foreign Key → dosens, Nullable)
- `status` (Enum: Aktif, Tidak Aktif)
- `timestamps`

### Tabel: mata_kuliahs
- `id` (Primary Key)
- `kode` (String, Unique)
- `nama` (String)
- `sks` (Integer)
- `timestamps`

### Tabel: krses (Pivot untuk M-M relationship)
- `id` (Primary Key)
- `mahasiswa_id` (Foreign Key → mahasiswas)
- `mata_kuliah_id` (Foreign Key → mata_kuliahs)
- `timestamps`
- **Unique Constraint**: (mahasiswa_id, mata_kuliah_id)

## Model Relationships

**Fakultas** →
- hasMany(Dosen)
- hasMany(Mahasiswa)

**Dosen** →
- belongsTo(Fakultas)
- hasMany(Mahasiswa) *[Filter: status = 'Aktif']*

**Mahasiswa** →
- belongsTo(Fakultas)
- belongsTo(Dosen)
- belongsToMany(MataKuliah) via krses

**MataKuliah** →
- belongsToMany(Mahasiswa) via krses

**Krs** → [Junction Model]
- belongsTo(Mahasiswa)
- belongsTo(MataKuliah)

## Fitur Khusus

### ✨ Filter Status Mahasiswa
Mahasiswa dengan status "Tidak Aktif" tidak akan ditampilkan dalam:
- Daftar mahasiswa bimbingan di detail dosen
- Counter jumlah mahasiswa di index dosen
- Counter mahasiswa aktif di dashboard

### 🔄 Filter Pembimbing Akademik Dinamis
Saat memilih fakultas saat membuat/mengedit mahasiswa:
1. Dropdown dosen akan otomatis diisi dengan dosen dari fakultas terpilih
2. Menggunakan API endpoint: `GET /api/dosen/{fakultas_id}`
3. Update real-time tanpa reload halaman

### 📊 Real-time SKS Calculation
Di halaman edit KRS:
- Saat checkbox mata kuliah diubah, total SKS langsung terupdate
- Tampilan yang jelas dengan highlight warna untuk total

## Route

```php
GET  /                           → Dashboard
GET  /dosen                      → List Dosen
GET  /dosen/create              → Form Create Dosen
POST /dosen                      → Store Dosen
GET  /dosen/{id}                → Detail Dosen
GET  /dosen/{id}/edit           → Form Edit Dosen
PUT  /dosen/{id}                → Update Dosen
DELETE /dosen/{id}              → Delete Dosen

GET  /mahasiswa                 → List Mahasiswa
GET  /mahasiswa/create          → Form Create Mahasiswa
POST /mahasiswa                 → Store Mahasiswa
GET  /mahasiswa/{id}            → Detail Mahasiswa
GET  /mahasiswa/{id}/edit       → Form Edit Mahasiswa
PUT  /mahasiswa/{id}            → Update Mahasiswa
DELETE /mahasiswa/{id}          → Delete Mahasiswa

GET  /krs                        → List KRS
GET  /krs/{mahasiswa}/edit      → Edit KRS
PUT  /krs/{mahasiswa}           → Update KRS

GET  /api/dosen/{fakultas_id}   → API Dosen by Fakultas (JSON)

# Tersedia juga CRUD lengkap untuk:
- /fakultas
- /mata_kuliah
```

## Color Palette (Monochrome Design)

- **Primary Dark**: `#1a1a1a` (Navbar, Headers)
- **Secondary Dark**: `#2a2a2a` (Sidebar, Accents)
- **Light BG**: `#f8f8f8` (Card backgrounds)
- **Border**: `#ddd` (Subtle borders)
- **Text**: `#666` (Secondary text)

## Sample Data

Database seeders sudah menyediakan sample data:
- **3 Fakultas**: Teknik dan Informatika, Ekonomi dan Bisnis, Keguruan dan Ilmu Pendidikan
- **4 Dosen**: Tersebar di berbagai fakultas
- **4 Mahasiswa Aktif**: Dengan relasi ke dosen dan fakultas
- **5 Mata Kuliah**: Dengan berbagai nilai SKS

## Pengembangan Lebih Lanjut

Fitur yang bisa ditambahkan di masa depan:
- Autentikasi & Authorization
- Pagination untuk list views
- Search & Filter functionality
- Export ke Excel/PDF
- Dashboard analytics yang lebih detail
- Audit logs untuk tracking perubahan
- Validasi error messages yang lebih detail
- Mobile responsive design

## Debugging & Troubleshooting

### Error: "Failed to open stream" saat migrate
Pastikan semua seeder file ada di folder `database/seeders/`

### Database tidak terseeding
Jalankan: `php artisan migrate:fresh --seed`

### API Dosen tidak bekerja
Periksa route di `routes/web.php` untuk endpoint `/api/dosen/{fakultas_id}`

## Support

Untuk bantuan dan pertanyaan, silakan hubungi tim development.

## License

MIT License - Feel free to use this project for educational purposes.
