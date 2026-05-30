# doctor-flow.md

# Doctor Flow Documentation

## Description

Flow ini menjelaskan alur kerja dokter dalam Sistem Informasi Manajemen Rumah Sakit (SIMRS).

---

# Main Flow

```plaintext id="k5v2m8"
Pasien Datang
      ↓
Admin Melakukan Pendaftaran
      ↓
Pasien Mendapat Nomor Antrian
      ↓
Dokter Melihat Antrian Pasien
      ↓
Dokter Memilih Pasien
      ↓
Dokter Melakukan Pemeriksaan
      ↓
Dokter Menginput:
- Keluhan
- Diagnosa
- Tindakan
      ↓
Dokter Membuat Resep
      ↓
Data Tersimpan ke Rekam Medis
      ↓
Resep Dikirim ke Apotek
```

---

# Detailed Flow

## 1. Login Dokter

Dokter login menggunakan:

- email
- password

Sistem melakukan:

- validasi login
- pengecekan role dokter

---

## 2. Dashboard Dokter

Dokter dapat:

- melihat jadwal praktik
- melihat antrian pasien
- melihat riwayat pemeriksaan

---

## 3. Pemeriksaan Pasien

Dokter memilih pasien dari daftar antrian.

Dokter menginput:

- keluhan pasien
- diagnosa
- tindakan medis

---

## 4. Pembuatan Resep

Dokter membuat resep obat.

Data resep meliputi:

- nama obat
- dosis
- aturan minum

---

## 5. Penyimpanan Rekam Medis

Sistem menyimpan:

- hasil pemeriksaan
- diagnosa
- resep

ke dalam rekam medis pasien.

---

# Related Modules

- Authentication
- Patients
- Examinations
- Prescriptions
- Pharmacy

---

# Notes

- Hanya role dokter yang dapat mengakses modul pemeriksaan.
- Setiap pemeriksaan otomatis tersimpan dalam riwayat pasien.
