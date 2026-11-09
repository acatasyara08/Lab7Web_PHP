Tasyah Ramadani (31210223)
I251B
# LAPORAN PRAKTIKUM 7
## Pemrograman Server-Side dengan PHP

### 1. Tujuan Praktikum

Praktikum ini bertujuan untuk:
- Memahami perbedaan pemrosesan client-side dan server-side.
- Mengenal sintaks dasar PHP.
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
- Memproses data dari form menggunakan metode GET dan POST.
- Melakukan validasi dan sanitasi input pengguna.
- Membuat aplikasi sederhana menggunakan PHP.

### 2. Perangkat yang Digunakan

Perangkat dan aplikasi yang digunakan dalam praktikum ini:
- Laptop dengan sistem operasi Windows.
- Visual Studio Code sebagai editor kode.
- XAMPP sebagai server lokal.
- Apache sebagai web server.
- Google Chrome sebagai web browser.
- Bahasa pemrograman PHP.

### 3. Cara Menjalankan Server Lokal

Langkah-langkah menjalankan program PHP:

1. Membuka aplikasi XAMPP.
2. Menjalankan Apache dengan menekan tombol Start.
3. Membuka folder proyek `Lab7Web_PHP` di Visual Studio Code.
4. Membuat dan menyimpan file dengan ekstensi `.php`.
5. Membuka browser Google Chrome.
6. Menjalankan file melalui alamat localhost.

Contoh alamat untuk menjalankan program:

`http://localhost/Lab7Web_PHP/`

Untuk membuka file tertentu, tambahkan nama file PHP pada alamat tersebut.

Contoh:

`http://localhost/Lab7Web_PHP/format_rupiah.php`

### 4. Struktur Folder Proyek

Struktur folder proyek Praktikum 7:

```text
Lab7Web_PHP/
│
├── index.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── cari.php
├── latihan6.php
├── latihan7.php
├── mini_project.php
├── rata_rata.php
├── format_rupiah.php
├── validasi_nim.php
├── README.md
│
└── screenshots/
    ├── latihan1.png
    ├── latihan2.png
    ├── latihan3.png
    ├── latihan4.png
    ├── latihan5.png
    ├── latihan6.png
    ├── latihan7.png
    ├── mini_project.png
    ├── eksperimen1.png
    ├── eksperimen2.png
    ├── eksperimen3.png
    ├── eksperimen4.png
    └── eksperimen5.png
```

Catatan: Nama file dan screenshot di atas merupakan susunan contoh. Sesuaikan dengan nama file yang benar-benar ada di folder proyek.

### 5. Ringkasan Hasil Praktikum

Berdasarkan kegiatan Praktikum 7, hasil yang telah dikerjakan meliputi:

1. Menjalankan program PHP melalui server lokal menggunakan XAMPP.
2. Menggunakan variabel, operator, dan percabangan dalam PHP.
3. Menerapkan perulangan dan array untuk menampilkan data.
4. Membuat function untuk menjalankan proses tertentu.
5. Menggunakan metode GET untuk mengirim dan mencari data.
6. Menggunakan metode POST untuk mengirim data melalui formulir.
7. Mengolah data sederhana menggunakan PHP.
8. Membuat mini project formulir data mahasiswa dengan validasi input.

### 6. Pengujian Input Valid dan Tidak Valid

Pengujian dilakukan untuk memastikan program dapat menerima data yang sesuai dan menolak data yang tidak sesuai ketentuan.

**A. Contoh input valid**

1. NIM `1234567890` diterima karena terdiri dari 10 digit angka.
2. Data mahasiswa dengan nama, NIM, program studi, semester 1–14, dan email yang valid dapat diproses.

**B. Contoh input tidak valid**

1. NIM `12345abc90` ditolak karena mengandung huruf.
2. NIM `12345` ditolak karena tidak memiliki 10 digit.

Hasil pengujian menunjukkan bahwa validasi PHP dapat membantu memastikan data yang dimasukkan sesuai dengan ketentuan program.

### 7. Kesimpulan

Dari Praktikum 7 ini, dapat disimpulkan bahwa PHP merupakan bahasa pemrograman server-side yang digunakan untuk memproses data pada server. Melalui praktikum ini, saya mempelajari penggunaan variabel, operator, percabangan, perulangan, function, metode GET dan POST, serta validasi input pengguna.

Praktikum ini juga memberikan pemahaman mengenai cara membuat aplikasi sederhana berbasis web menggunakan PHP dan server lokal XAMPP.
```
