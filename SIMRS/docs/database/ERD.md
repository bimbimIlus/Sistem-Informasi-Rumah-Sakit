# ERD.md

# Entity Relationship Diagram (ERD)

# Sistem Informasi Manajemen Rumah Sakit (SIMRS)

## Database Overview

Database SIMRS digunakan untuk:

- Mengelola user
- Data pasien
- Pemeriksaan dokter
- Resep obat
- Pembayaran
- Pengelolaan obat

---

# Entity List

## 1. users

Menyimpan data user sistem.

### Relasi

- users memiliki banyak examinations
- users memiliki banyak payments

---

## 2. patients

Menyimpan data pasien rumah sakit.

### Relasi

- patients memiliki banyak examinations
- patients memiliki banyak prescriptions
- patients memiliki banyak payments

---

## 3. examinations

Menyimpan data pemeriksaan pasien oleh dokter.

### Relasi

- examinations belongsTo patients
- examinations belongsTo users (dokter)

---

## 4. prescriptions

Menyimpan resep obat dari dokter.

### Relasi

- prescriptions belongsTo patients
- prescriptions belongsTo users (dokter)

---

## 5. medicines

Menyimpan data obat.

### Relasi

- medicines memiliki banyak prescription_items

---

## 6. prescription_items

Detail obat dalam resep.

### Relasi

- prescription_items belongsTo prescriptions
- prescription_items belongsTo medicines

---

## 7. payments

Menyimpan transaksi pembayaran pasien.

### Relasi

- payments belongsTo patients
- payments belongsTo users (kasir)

---

# ERD Relationship

```plaintext id="j2v5k9"
users
 ├── examinations
 ├── prescriptions
 └── payments

patients
 ├── examinations
 ├── prescriptions
 └── payments

prescriptions
 └── prescription_items

medicines
 └── prescription_items
```

---

# Main Tables

| Table              | Description        |
| ------------------ | ------------------ |
| users              | Data user sistem   |
| patients           | Data pasien        |
| examinations       | Pemeriksaan pasien |
| prescriptions      | Resep dokter       |
| medicines          | Data obat          |
| prescription_items | Detail resep       |
| payments           | Pembayaran pasien  |

---

# Role System

## User Roles

- admin
- dokter
- kasir
- apoteker

---

# Authentication

Menggunakan:

- Laravel Sanctum
- Middleware role access

---

# Notes

- Setiap pasien dapat memiliki banyak pemeriksaan.
- Setiap dokter dapat membuat banyak resep.
- Setiap resep dapat memiliki banyak obat.
- Pembayaran terkait dengan pasien dan kasir.
