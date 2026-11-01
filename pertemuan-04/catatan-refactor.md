
# Catatan Refactor - Pertemuan 4

## Perubahan Kode

Pada Pertemuan 4, class Mahasiswa dan Produk dari Pertemuan 2 diperbarui menggunakan fitur OOP PHP 8.

Perubahan yang dilakukan:

1. Menambahkan strict_types untuk pemeriksaan tipe yang lebih ketat.
2. Menggunakan constructor property promotion agar deklarasi dan inisialisasi properti lebih ringkas.
3. Menggunakan readonly pada properti nim agar tidak dapat diubah setelah objek dibuat.
4. Menambahkan konstanta BATAS_SKS dengan nilai 24.
5. Menambahkan static counter untuk menghitung jumlah objek Mahasiswa.
6. Membuat enum Semester dengan pilihan Ganjil dan Genap.
7. Membuat enum Predikat dengan method label().

## Perbandingan Jumlah Baris

Perhitungan berikut berdasarkan kode class yang digunakan pada Pertemuan 2 dan versi refactor Pertemuan 4, termasuk baris kosong.

| File | Sebelum | Sesudah | Selisih |
|---|---:|---:|---:|
| Mahasiswa.php | 39 | 42 | +3 |
| Produk.php | 23 | 18 | -5 |
| Total | 62 | 60 | -2 |

Catatan: Jumlah baris dapat berbeda jika format atau spasi diubah. Perbandingan hanya mencakup Mahasiswa.php dan Produk.php, tidak termasuk file enum dan index.php.

## Kesimpulan

Constructor property promotion mengurangi penulisan deklarasi dan inisialisasi properti secara berulang.

Walaupun class Mahasiswa mendapat tambahan fitur, jumlah baris gabungan kedua class tetap lebih sedikit. Penggunaan readonly, static, const, strict_types, dan enum juga membuat struktur kode lebih terkontrol.
