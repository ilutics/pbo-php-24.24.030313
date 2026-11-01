
# Abstract Class dan Interface

## Kapan Memilih Abstract Class?

Abstract class digunakan ketika beberapa class memiliki hubungan pewarisan dan membutuhkan kerangka dasar yang sama. Abstract class dapat memiliki method abstrak yang wajib diimplementasikan oleh class turunannya, serta method biasa yang dapat digunakan bersama.

Contohnya, `BangunDatar` menjadi abstract class bagi `Lingkaran`, `Persegi`, `Segitiga`, dan `PersegiPanjang`. Setiap class turunan memiliki cara menghitung luas dan keliling yang berbeda, tetapi tetap menggunakan kerangka dasar yang sama.

## Kapan Memilih Interface?

Interface digunakan ketika beberapa class membutuhkan kontrak perilaku yang sama, meskipun tidak memiliki hubungan pewarisan. Class yang mengimplementasikan interface wajib menyediakan method sesuai kontrak tersebut.

Contohnya, interface `Notifikasi` digunakan oleh class `Email`, `WhatsApp`, dan `SMS`. Ketiganya wajib mengimplementasikan method `kirim()`, tetapi masing-masing memiliki bentuk pengiriman pesan yang berbeda.
