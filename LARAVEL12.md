# Struktur Folder dan File Laravel 12

Laravel 12 memiliki struktur folder dan file yang dirancang untuk memberikan titik awal yang baik untuk aplikasi kecil maupun besar. Dokumen ini menjelaskan struktur direktori standar Laravel 12 berdasarkan dokumentasi resmi terbaru.

## Direktori Root

### Direktori `app`

Direktori `app` berisi kode inti aplikasi Anda. Hampir semua kelas dalam aplikasi Anda akan berada di direktori ini.

### Direktori `bootstrap`

Direktori `bootstrap` berisi file `app.php` yang melakukan bootstrap framework. Direktori ini juga menyimpan direktori `cache` yang berisi file-file yang dihasilkan framework untuk optimasi performa seperti file cache rute dan layanan.

### Direktori `config`

Direktori `config` berisi semua file konfigurasi aplikasi Anda. Sangat disarankan untuk membaca semua file ini dan membiasakan diri dengan semua opsi yang tersedia.

### Direktori `database`

Direktori `database` berisi migrasi database, model factories, dan seeders. Jika mau, Anda juga dapat menggunakan direktori ini untuk menyimpan database SQLite.

### Direktori `public`

Direktori `public` berisi file `index.php`, yang merupakan entry point untuk semua permintaan yang masuk ke aplikasi Anda dan mengkonfigurasi autoloading. Direktori ini juga menyimpan aset Anda seperti gambar, JavaScript, dan CSS.

### Direktori `resources`

Direktori `resources` berisi views serta aset mentah yang belum dikompilasi seperti CSS atau JavaScript.

### Direktori `routes`

Direktori `routes` berisi semua definisi rute untuk aplikasi Anda. Secara default, beberapa file rute disertakan dengan Laravel:

- `web.php`: Berisi rute yang Laravel tempatkan dalam grup middleware `web`, yang menyediakan state sesi, perlindungan CSRF, dan enkripsi cookie.
- `console.php`: Tempat Anda dapat mendefinisikan semua perintah konsol berbasis closure.

Secara opsional, Anda dapat menginstal file rute tambahan untuk rute API (`api.php`) dan saluran broadcasting (`channels.php`), melalui perintah Artisan `install:api` dan `install:broadcasting`.

### Direktori `storage`

Direktori `storage` berisi log, template Blade yang dikompilasi, sesi berbasis file, cache file, dan file lain yang dihasilkan oleh framework. Direktori ini dibagi menjadi direktori `app`, `framework`, dan `logs`. Direktori `app` dapat digunakan untuk menyimpan file yang dihasilkan oleh aplikasi Anda. Direktori `framework` digunakan untuk menyimpan file dan cache yang dihasilkan framework. Terakhir, direktori `logs` berisi file log aplikasi Anda.

Direktori `storage/app/public` dapat digunakan untuk menyimpan file yang dihasilkan pengguna, seperti avatar profil, yang harus dapat diakses secara publik. Anda harus membuat symbolic link di `public/storage` yang mengarah ke direktori ini. Anda dapat membuat link menggunakan perintah Artisan `php artisan storage:link`.

### Direktori `tests`

Direktori `tests` berisi tes otomatis Anda. Contoh tes unit dan fitur [Pest](https://pestphp.com/) atau [PHPUnit](https://phpunit.de/) disediakan secara default. Setiap kelas tes harus diakhiri dengan kata `Test`. Anda dapat menjalankan tes menggunakan perintah `/vendor/bin/pest` atau `/vendor/bin/phpunit`. Atau, jika Anda menginginkan representasi hasil tes yang lebih detail dan indah, Anda dapat menjalankan tes menggunakan perintah Artisan `php artisan test`.

### Direktori `vendor`

Direktori `vendor` berisi dependensi [Composer](https://getcomposer.org/) Anda.

## Direktori App

Sebagian besar aplikasi Anda berada di direktori `app`. Secara default, direktori ini memiliki namespace `App` dan di-autoload oleh Composer menggunakan standar autoloading [PSR-4](https://www.php-fig.org/psr/psr-4/).

Secara default, direktori `app` berisi direktori `Http`, `Models`, dan `Providers`. Namun, seiring waktu, berbagai direktori lain akan dihasilkan di dalam direktori app saat Anda menggunakan perintah Artisan untuk menghasilkan kelas. Misalnya, direktori `app/Console` tidak akan ada sampai Anda menjalankan perintah Artisan `make:command` untuk menghasilkan kelas perintah.

Berikut adalah direktori-direktori yang mungkin ada di dalam direktori `app`:

### Direktori `Broadcasting`

Direktori `Broadcasting` berisi semua kelas saluran broadcast untuk aplikasi Anda. Kelas-kelas ini dihasilkan menggunakan perintah `make:channel`. Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda saat Anda membuat saluran pertama Anda.

### Direktori `Console`

Direktori `Console` berisi semua perintah Artisan kustom untuk aplikasi Anda. Perintah-perintah ini dapat dihasilkan menggunakan perintah `make:command`.

### Direktori `Events`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda oleh perintah Artisan `event:generate` dan `make:event`. Direktori `Events` menyimpan kelas event. Event dapat digunakan untuk memberi tahu bagian lain dari aplikasi Anda bahwa tindakan tertentu telah terjadi, memberikan fleksibilitas dan decoupling yang besar.

### Direktori `Exceptions`

Direktori `Exceptions` berisi semua exception kustom untuk aplikasi Anda. Exception ini dapat dihasilkan menggunakan perintah `make:exception`.

### Direktori `Http`

Direktori `Http` berisi controller, middleware, dan form request Anda. Hampir semua logika untuk menangani permintaan yang masuk ke aplikasi Anda akan ditempatkan di direktori ini.

### Direktori `Jobs`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `make:job`. Direktori `Jobs` menyimpan job yang dapat diantrekan untuk aplikasi Anda. Job dapat diantrekan oleh aplikasi Anda atau dijalankan secara sinkron dalam siklus hidup permintaan saat ini.

### Direktori `Listeners`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `event:generate` atau `make:listener`. Direktori `Listeners` berisi kelas yang menangani event Anda. Event listener menerima instance event dan melakukan logika sebagai respons terhadap event yang dipicu.

### Direktori `Mail`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `make:mail`. Direktori `Mail` berisi semua kelas Anda yang mewakili email yang dikirim oleh aplikasi Anda.

### Direktori `Models`

Direktori `Models` berisi semua kelas model Eloquent Anda. ORM Eloquent yang disertakan dengan Laravel menyediakan implementasi ActiveRecord yang indah dan sederhana untuk bekerja dengan database Anda.

### Direktori `Notifications`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `make:notification`. Direktori `Notifications` berisi semua notifikasi "transaksional" yang dikirim oleh aplikasi Anda, seperti notifikasi sederhana tentang peristiwa yang terjadi dalam aplikasi Anda.

### Direktori `Policies`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `make:policy`. Direktori `Policies` berisi kelas kebijakan otorisasi untuk aplikasi Anda. Kebijakan digunakan untuk menentukan apakah pengguna dapat melakukan tindakan tertentu terhadap sumber daya.

### Direktori `Providers`

Direktori `Providers` berisi semua service provider untuk aplikasi Anda. Service provider mem-bootstrap aplikasi Anda dengan mengikat layanan di container layanan, mendaftarkan event, atau melakukan tugas lain untuk mempersiapkan aplikasi Anda untuk permintaan yang masuk.

### Direktori `Rules`

Direktori ini tidak ada secara default, tetapi akan dibuat untuk Anda jika Anda menjalankan perintah Artisan `make:rule`. Direktori `Rules` berisi objek aturan validasi kustom untuk aplikasi Anda.

## Kesimpulan

Struktur direktori Laravel 12 dirancang untuk memberikan titik awal yang baik untuk aplikasi web. Framework ini tidak memaksakan batasan di mana kelas tertentu berada - selama Composer dapat meng-autoload kelas tersebut. Anda bebas mengorganisir aplikasi Anda sesuai kebutuhan.

Banyak direktori yang disebutkan di atas tidak ada secara default dan akan dibuat saat Anda menjalankan perintah Artisan tertentu. Ini membantu menjaga aplikasi Anda tetap bersih dan terorganisir, hanya membuat direktori yang benar-benar Anda butuhkan.