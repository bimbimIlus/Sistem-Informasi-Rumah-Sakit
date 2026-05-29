# patient-flow.md

# Patient Flow Documentation

## Description

Flow ini menjelaskan alur pasien dalam Sistem Informasi Manajemen Rumah Sakit (SIMRS).

---

# Main Flow

```plaintext id="x7m3q1"
Pasien Datang
      ↓
Admin Melakukan Pendaftaran
      ↓
Input Data Pasien
      ↓
Generate Nomor Rekam Medis
      ↓
Generate Nomor Antrian
      ↓
Pasien Memilih Poli & Dokter
      ↓
Pasien Menunggu Antrian
      ↓
Pasien Diperiksa Dokter
      ↓
Pasien Mendapat Resep
      ↓
Pasien Melakukan Pembayaran
      ↓
Pasien Mengambil Obat
```

---

# Detailed Flow

## 1. Registrasi Pasien

Admin menginput:

- nama pasien
- tanggal lahir
- nomor telepon
- alamat

---

## 2. Generate Nomor Rekam Medis

Sistem otomatis membuat:

- nomor rekam medis unik

Contoh:

```plaintext id="n2v9x4"
RM001
RM002
```

---

## 3. Generate Nomor Antrian

Sistem membuat nomor antrian pasien.

Contoh:

```plaintext id="v5k1m7"
A001
A002
```

---

## 4. Pemeriksaan Dokter

Pasien dipanggil berdasarkan nomor antrian.

Dokter melakukan:

- pemeriksaan
- diagnosa
- tindakan

---

## 5. Resep Obat

Dokter membuat resep obat untuk pasien.

Resep dikirim ke bagian apotek.

---

## 6. Pembayaran

Kasir menghitung:

- biaya dokter
- biaya obat

Pasien melakukan pembayaran.

---

## 7. Pengambilan Obat

Apoteker:

- memvalidasi resep
- menyerahkan obat

---

# Related Modules

- Patients
- Queue
- Examination
- Payment
- Pharmacy

---

# Notes

- Nomor rekam medis harus unik.
- Riwayat pasien tersimpan dalam sistem.
