# BUSINESS REQUIREMENT DOCUMENT (BRD)

# Sistem Informasi Manajemen Rumah Sakit (SIMRS)

## 1. Latar Belakang

Rumah sakit membutuhkan sistem digital untuk membantu proses pelayanan pasien, pengelolaan data medis, transaksi pembayaran, dan pengelolaan obat secara terintegrasi.

Sistem manual menyebabkan:

- Penumpukan data pasien
- Kesalahan pencatatan
- Lambatnya proses pelayanan
- Kesulitan pencarian data
- Kesalahan transaksi

Oleh karena itu dibutuhkan Sistem Informasi Manajemen Rumah Sakit berbasis web.

---

## 2. Tujuan Sistem

- Mempermudah pengelolaan data pasien
- Mempercepat proses pelayanan
- Mempermudah pengelolaan rekam medis
- Mengelola transaksi pembayaran
- Mengelola stok obat
- Menyediakan laporan rumah sakit

---

## 3. Target Pengguna

- Admin
- Dokter
- Kasir
- Apoteker

---

## 4. Fitur Utama

### Admin

- CRUD user
- CRUD pasien
- CRUD dokter
- Kelola laporan
- Kelola obat

### Dokter

- Pemeriksaan pasien
- Input diagnosa
- Membuat resep

### Kasir

- Pembayaran pasien
- Cetak invoice

### Apoteker

- Kelola obat
- Validasi resep
- Update stok

---

## 5. Teknologi

- Laravel
- MySQL
- REST API
- MVC Architecture
- Bootstrap / Tailwind CSS
