Nama : Ramadani
Kelas : 12.3A.05
Nim : 12200599

// contoh1
MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu
model, view dan controller.

a. Model
Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan
oleh aplikasi.
Sebagai catatan, Semua model harus disimpan di dalam folder application\models

sebagai contoh nya yaitu :
saya menaruh semua model di penyimpanan komputer saya yaitu di : D:\xampp\htdocs\belajar\pustaka-booking\app\models

b. View
View merupakan bagian yang menangani halaman user interface atau halaman yang muncul
pada user(pada browser). tampilan dari user interface di kumpulkan pada folder
Application/views

sebagai contoh nya yaitu :
saya menaruh file save untuk tampilan, dan itu semua di taruh di satu folder yaitu di application/views dan nantinya berguna untuk memudahkan kita jika ingin mengatur
kembali tampilan interface dari user

c. Controller
Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view
Untuk bentuk umum dan contoh-contoh penggunaan model, view, controller

sebagai contoh nya yaitu :
ketika ingin menyesuaikan nama cabang awal di repositori baru klik next
dan mengatur path environment pada dan membuka perintah command prompt (CMD) pada windows itu bisa di sebut juga dengan contoh penggunaan model,view dan controller

// contoh 2
Controller standar (default) adalah controller yang akan dipanggil secara otomatis ketika
user tidak menyertakan nama controller di dalam URI.
dengan contohnya yaitu :
dengan menulis nama url http://localhost/rental_mobil/index.php
maka permintaan diatas akan memanggil controller standar yang sudah di definisikan oleh codeigniter

dan juga controller standar dapat ditentukan sendiri sesuai dengan keinginan, yaitu dengan cara melakukan konfigurasi
pada file application\config\router.php
sebagai contoh yaitu dengan baris code sebagai berikut :
$route[‘default_controller’] = ‘welcome’;
lalu ubah kata welcome dengan nama controller yang diinginkan untuk dijadikan controller standar

// contoh 3
a. Model
Secara umum perancangan model dapat dibuat menggunakan aturan berikut:
1) Model harus memiliki atribut yang dapat mewakili element tertentu.
2) Model seharusnya berisi kode kode yang menangani proses bisnis untuk data bersangkutan,
misalnya untuk melakukan proses validasi data.
3) Model boleh berisi kode kode yang dugunakan untuk memanipulasi data, misalnya untuk
menambah baris data baru, mengubah baris data, dan menghapus baris data pada sebuah tabel
yang terdapat dalam database.
Model seharusnya tidak berisi kode kode yang berkaitan langsung dengan permintaan yang
dilakukan oleh user melalu URL (tidak berisi $_GET maupun $_POST). Pekerjaan seperti ini
seharusnya dilakukan oleh controller Model seharusnya tidak berisi kode kode yang berkaitan dengan presentasi (tampilan) halaman
web yang akan disajikan ke hadapan user. Pekerjaan semacam ini seharusnya dilakukan oleh view.

b. View
Berikut ini aturan yang dapat digunakan untuk merancang view.
1) View harus berisi kode kode yang bersifat presentasional, biasanya berupa kode HTML. View
juga dapat berisi perintah perintah PHP sederhana yang masih berkaitan dengan proses
pembuatan tampilna, misalnya untuk menampilkan data yang dihasilkan oleh model tertentu.
2) View seharusnya tidak berisi kode PHP yang melakukan akses data secara langsung ke
database. Pekerjaan semacam ini sebaiknya dilakukan oleh model.
3) View seharunsnya menghindari kode PHP yang mengakses secara langsung permintaan dari
user (tidak berisi $_GET maupun $_POST). Tugas ini sebaiknya didelegasikan ke controller

c. Controller
Berikut ini aturan yang dapat digunakan untuk merancang controller.
1) Controller boleh mengakses $_GET, $_POST, dan variabel variabel PHP lainnya yang
berkaitan dengan permintaan user.
2) Controller boleh membuat objek (instance) dari kelas kelas model dan mengarahkan ke view
(jika model bersangkutan menghasilkan data yang perlu ditampilkan ke user)
3) Controller seharusnya tidak berisi kode kode yang mengakses data secara langsung dari
database. Tugas seperti ini sebaiknya dilakukan oleh model. Dan controller tinggal
menggunakannya saja.
4) Controller seharusnya tidak berisi kode kode HTML yang diperlukan untuk tujuan presentasi.
Tugas ini sebaiknya dilakukan oleh view
