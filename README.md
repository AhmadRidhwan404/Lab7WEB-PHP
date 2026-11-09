# DOKUMENTASI PRAKTIKUM PHP

**Nama : Ahmad Ridhwan Ilham 312510222**

**Kelas : I251B**

## 1. Deskripsi Project

Project ini merupakan hasil praktikum pemrograman PHP yang terdiri dari latihan dasar PHP dan mini project aplikasi formulir data mahasiswa.

Tujuan praktikum ini adalah memahami konsep dasar PHP, pengolahan data, penggunaan metode GET dan POST, validasi input, serta menampilkan hasil pemrosesan data pada halaman web.

## 2. Tujuan Praktikum

- Memahami dasar pemrograman PHP.
- Mengenal variabel, kondisi, array, perulangan, dan function.
- Memahami penggunaan metode GET dan POST.
- Mempelajari validasi data pada sisi server.
- Memahami penggunaan `htmlspecialchars()` untuk keamanan output.
- Membuat aplikasi formulir data mahasiswa sederhana.

## 3. Perangkat yang Digunakan

| Perangkat | Fungsi |
|---|---|
| Visual Studio Code | Menulis dan mengedit kode PHP |
| XAMPP | Menjalankan server lokal Apache |
| PHP | Bahasa pemrograman server-side |
| Google Chrome | Menampilkan dan menguji aplikasi |
| GitHub | Menyimpan dokumentasi dan kode program |

## 4. Struktur Folder

```text
project-php/
│
├── lab7_php/
│   └── index.php
│
├── form_mahasiswa/
│   └── index.php
│
├── dokumentasi/
│   ├── praktikum-php/
│   │   ├── input.png
│   │   └── output.png
│   │
│   └── form-mahasiswa/
│       ├── input.png
│       ├── output.png
│       └── validasi.png
│
└── README.md
```

## 5. Cara Menjalankan Project

1. Buka aplikasi XAMPP.
2. Aktifkan Apache.
3. Simpan folder project di dalam `C:\xampp\htdocs`.
4. Buka folder project menggunakan Visual Studio Code.
5. Buka browser Google Chrome.
6. Jalankan project melalui alamat berikut:

**Praktikum PHP:**
```text
http://localhost/lab7_php/
```

**Formulir Data Mahasiswa:**
```text
http://localhost/form_mahasiswa/
```

## 6. Dokumentasi Hasil Praktikum

### A. Praktikum Dasar PHP

Praktikum ini mencakup penggunaan variabel, perhitungan nilai, kondisi, array, perulangan, function, serta metode GET dan POST.


**1. Output Program**

Screenshot hasil eksekusi program PHP yang menampilkan teks, waktu server, nilai akhir, predikat, daftar mahasiswa, perhitungan diskon, dan hasil pengolahan form.

**Latihan 1**

<img width="477" height="213" alt="Screenshot 2026-11-09 171819" src="https://github.com/user-attachments/assets/25777b42-a6a8-48d5-9427-82ad95ff4d55" />

**Latihan 2**

<img width="229" height="113" alt="Screenshot 2026-11-09 171829" src="https://github.com/user-attachments/assets/08ed3214-7ed5-4d48-b204-5ed9b4022207" />

**Latihan 3**

<img width="309" height="215" alt="Screenshot 2026-11-09 171838" src="https://github.com/user-attachments/assets/38b430e1-bb10-439e-8a24-f4b76d988223" />

**Latihan 4**

<img width="353" height="42" alt="Screenshot 2026-11-09 171853" src="https://github.com/user-attachments/assets/302ca705-b280-4a9a-ab1b-46efa1f75858" />

**Latihan 5**

<img width="479" height="68" alt="Screenshot 2026-11-09 171909" src="https://github.com/user-attachments/assets/693e969c-5749-4753-b73d-dba47fd2741b" />

**Latihan 6**

<img width="898" height="181" alt="Screenshot 2026-11-09 171943" src="https://github.com/user-attachments/assets/7095fd17-0514-4fc7-a53e-e724fbd8addd" />

**Latihan 7**

<img width="839" height="196" alt="Screenshot 2026-11-09 172009" src="https://github.com/user-attachments/assets/7e8967e4-3bb8-4ae9-9d54-ae5c807181c5" />

### B. Mini Project Formulir Data Mahasiswa

Mini project ini merupakan aplikasi formulir untuk memasukkan data mahasiswa dan menampilkan ringkasan setelah data berhasil divalidasi.

Data yang dimasukkan meliputi:
- Nama mahasiswa.
- NIM.
- Program studi.
- Semester.
- Email.

**1. Input Data Mahasiswa**

Screenshot tampilan formulir sebelum data dikirimkan.

<img width="482" height="553" alt="Screenshot 2026-11-09 172100" src="https://github.com/user-attachments/assets/fe72b141-df9b-4f37-be6c-72841c3880d3" />


**2. Output Data Mahasiswa**

Screenshot hasil ringkasan data mahasiswa setelah formulir berhasil dikirim dan divalidasi.

<img width="442" height="323" alt="image" src="https://github.com/user-attachments/assets/8ebed899-bbd7-45aa-a2a9-0a28f66c5878" />


**3. Hasil Validasi**

Screenshot pesan kesalahan ketika pengguna mengosongkan kolom atau memasukkan data yang tidak sesuai aturan.

<img width="521" height="788" alt="image" src="https://github.com/user-attachments/assets/48289456-49bf-4af2-8479-e17ec9cc384e" />


## 7. Ringkasan Hasil Praktikum

Berdasarkan kegiatan praktikum, terdapat beberapa hasil yang diperoleh:

1. Berhasil menjalankan program PHP melalui server lokal XAMPP.
2. Berhasil menggunakan variabel, kondisi, array, perulangan, dan function.
3. Berhasil melakukan pengolahan data menggunakan metode GET dan POST.
4. Berhasil membuat formulir data mahasiswa.
5. Berhasil menerapkan validasi server-side pada data yang dimasukkan pengguna.
6. Berhasil menampilkan hasil input menggunakan `htmlspecialchars()`.

## 8. Kesimpulan

Praktikum ini memberikan pemahaman mengenai dasar pemrograman PHP dan penerapannya dalam pembuatan aplikasi web sederhana. Melalui latihan dan mini project, dapat dipahami bagaimana PHP mengolah data, melakukan validasi input, serta menampilkan hasil pemrosesan secara dinamis melalui browser.
