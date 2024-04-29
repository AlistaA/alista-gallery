# WEB GALLERY

## Tentang Website

Website galeri sederhana ini memungkinkan kamu untuk membuat album foto pribadi dan membagikannya dengan mudah kepada semua orang.

## Fitur

Fitur yang tersedia saat ini meliputi:
- Pendaftaran akun (Sign up)
- Masuk ke akun (Log in)
- Keluar dari akun (Log out)
- Multiuser (Beberapa pengguna)
- Menambahkan foto
- Menambahkan album
- Menambahkan komentar
- Mengedit komentar
- Menghapus komentar
- Menyukai gambar

## ERD, Relasi, dan UML Use Case

### ERD (Diagram Entitas Hubungan)

![ERD](https://github.com/nafisamaulidina/Caca-Gallery/blob/main/erd.jpeg)

### Relasi

![Relasi](https://github.com/nafisamaulidina/Caca-Gallery/blob/main/relasi.jpeg)

### UML (Diagram Kasus Penggunaan)

![UML](https://github.com/nafisamaulidina/Caca-Gallery/blob/main/uml.jpeg)

## Prasyaratan

Sebelum Anda menjalankan aplikasi ini, pastikan Anda memenuhi prasyarat berikut:
- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, Microsoft Edge, dll)

## Instalasi

1. Clone Repository
```
https://github.com/nafisamaulidina/Caca-Gallery
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=alista-gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

5. Migarate
```
php artisan migrate
```

7. Buat Storage Link
```
php artisan storage:link
```

8. Jalankan Serve
```
php artisan serve
```
