Langkah update program  donatur FULL:
1. Copykan semua file ke htdocs (jangan lupa backup program yg lama untuk jaga2).

Langkah Update database (Tidak merubah isi data) :
1. Jalankan XAMPP -> Jalankan service mysql (abaikan jika sudah)
2. Buka SQLYOG -> Koneksikan ke database donatur
3. Pastikan nama database lama = DONATUR
4. Buka file (CTRL + O) pada SQLyog dan buka file update.sql pada file zip ini.
5. Pilih database donatur
6. Focuskan cursor pada tab query update.sql yg telah dibuka tadi
7. Tekan tombol Execute All Queries (CTRL + F9) yg ditandai icon play double pada toolbar SQLYog
8. Tunggu hingga proses update selesai.
9. Selesai.

Catatan: jika import data dari file donatur_full.sql maka semua data lama yg udh diinputkan akan hilang atau ter-replace