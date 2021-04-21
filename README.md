# Tugas-Kelompok-4_PBD
Tugas Kelompok 4
 Merancang bangun aplikasi basis data menggunakan PHP (standard) dan DBMS MySQL arsitektur 2-TIER (CLIENT-SERVER/BASIS DATA TERPUSAT) 
  Tujuan nya ialah :
  - Mahasiswa dapat memahami konsep pemrograman CURD menggunakan PHP (standard) dan basis data MySQL dengan arsitektur 2-TIER (CLIENTSERVER/BASIS DATA TERPUSAT) 
  - Mahasiswa dapat mengimplementasikan konsep pemrograman basis data arsitektur 2-TIER (CLIENT-SERVER/BASIS DATA-TERPUSAT) 

  Teori :
- Arsitektur aplikasi basis data menjelaskan rancangan dasar aplikasi basis data yang akan dibangun. Arsitektur basis data menggambarkan diagram interaksi antara komponen-komponen penyusun sistem manajemen basis data. Komponenkomponen tersebut meliputi perangkat hardware, software, jaringan komputer, dan pengguna. Berdasarkan arsitekturnya aplikasi sistem manajemen basis data (SMBD) dibedakan menjadi beberapa macam antara lain adalah sebagai berikut: 
 
 1. SMBD terpusat (CDBMS: Centralized Database Management System). Pada sistem ini semua proses utama dan fungsi sistem manajemen basis data seperti user application programs dan user interface programs berada secara terpusat di satu komputer berkecepatan dan kapasitas tinggi (main frame). Pengguna mengakses basis data menggunakan terminal komputer. 
 2.  SMBD terdistribusi (DDBMS: Distribution Database Management System) Pada sistem ini data disimpan pada beberapa tempat (site), setiap tempat diatur dengan suatu DBMS yang dapat berjalan secara independent. Perangkat lunak dalam sistem ini akan mengatur pendistribusian data secara transparan. 
 3.  SMBD parallel (PDBMS: Parallel Database Management System) Sistem manajemen basis data ini menggunakan beberapa prosesor dan disk yang dirancang untuk dijalankan secara paralel dan simultan. Sistem ini digunakan untuk memperbaiki kinerja dari DBMS 
 
Dari tiga ragam jenis SMBD diatas terdapat beberapa model arsitektur aplikasi SMBD. Perkembangan Arsitektur SMBD cukup pesat dan cepat dengan mengikuti trend yang sejalan dengan kemajuan arsitektur sistem komputer serta teknologi informasi dan komunikasi. 

- Sistem Basis Data Terpusat (CDBMS) Pada sistem ini semua proses utama dan fungsi sistem manajemen basis data seperti user application programs dan user interface programs berada secara terpusat di satu komputer berkecepatan dan kapasitas tinggi (main frame). Pengguna mengakses basis data menggunakan terminal komputer. Pada arsitektur ini digunakan komputer main frame yg menyediakan semua proses utama seperti fungsinya pada DBMS (user application programs & user interface programs). Bentuk arsitektur terpusat ini menggambarkan pengaksesan terminal-terminal komputer (client) pada komputer server, berupa display informasi dan kontrol saja, karena pada terminal komputer tidak memungkinkan memiliki resource yang lebih. 
 
Seiring perkembangan teknologi dan turunnya harga hardware, banyak terminal user digantikan dengan PC, akan tetapi DBMS masih ditempatkan terpusat (Application program execution & user interface processing ditempatkan pada satu mesin).

Anggota Tim
1. Yudi Eka Naryono
2. Osama Isro Mubarok
3. Muhammad Jhody Alifa
4. Sunata Utama
5. Mutiara Ermandani
6. Risa Novriani

Tugas !!!

- Buatlah dokumen laporan sementara yang memuat analisis, desain, implementasi dan kesimpulan dari percobaan pada prosedur kerja 1-6. 
- Apakah aplikasi basis data dan jaringan komputer telah menggambarkan konsep dan tujuan dari arsitektur sistem basis data terpusat. Berikan analisa dan penjelasan TIM. 
- Apakah aplikasi basis data yang berjalan pada arsitektur jaringan komputer pada percobaan merupakan sistem terbuka? Berikan alasannya. 
- Kembangkan aplikasi basis data menjadi sebuah sistem tertutup. Sistem yang dilengkapi dengan fasilitas User Authentication untuk menentukan hak akses user pada aplikasi dari sisi frontend (user-client) dan backend (user-admin). 
- Lakukan pengujian hak akses user terhadap aplikasi dari sisi frontend (user-client) dan backend (user-admin). 
 
 
Aplikasi ini memiliki 2 tingkatan level yaitu user dan client, hal ini bertujuan untuk keamanan dan keoptimalan aplikasi, sebagai contoh, apabila kita login sebagai client kita hanya bisa membaca data, tidak bisa melakukan edit dan hapus data, dan apabila kita login sebagai user kita dapat melakukan edit dan delete data.
