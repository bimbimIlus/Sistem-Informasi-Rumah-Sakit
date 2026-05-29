# SRS_PHARMACY.md

# Software Requirement Specification

# Pharmacy Module

---

# 1. Module Description

Modul pharmacy digunakan untuk mengelola:

- data obat
- stok obat
- resep dokter
- pengeluaran obat

---

# 2. Objectives

Tujuan modul:

- mempermudah pengelolaan obat
- memonitor stok obat
- memproses resep pasien
- mencatat riwayat obat keluar

---

# 3. Actors

| Actor    | Description            |
| -------- | ---------------------- |
| Apoteker | Mengelola obat & resep |
| Dokter   | Membuat resep          |

---

# 4. Functional Requirements

## 4.1 Manage Medicines

### Description

Apoteker dapat:

- menambah obat
- mengedit obat
- menghapus obat

### Medicine Data

- nama obat
- kategori
- stok
- harga
- expired date

---

## 4.2 View Incoming Prescriptions

### Description

Apoteker dapat melihat resep masuk dari dokter.

### Information Displayed

- nama pasien
- nama dokter
- obat
- dosis
- status resep

---

## 4.3 Validate Prescription

### Description

Apoteker memvalidasi resep pasien.

### Process

- Sistem mengurangi stok obat otomatis
- Status resep berubah menjadi processed

---

## 4.4 Manage Medicine Stock

### Description

Apoteker dapat mengupdate stok obat.

### Process

- Sistem memperbarui jumlah stok

---

## 4.5 Medicine Outgoing History

### Description

Menampilkan riwayat obat keluar.

### Includes

- nama obat
- jumlah obat
- nama pasien
- tanggal pengeluaran

---

## 4.6 Low Stock Notification

### Description

Sistem memberikan notifikasi jika stok obat menipis.

### Rules

- Stok < 10 → tampil peringatan

---

# 5. Non Functional Requirements

| Requirement | Description               |
| ----------- | ------------------------- |
| Database    | Menggunakan MySQL         |
| Security    | Hanya role apoteker       |
| Performance | Response maksimal 3 detik |

---

# 6. Validation Rules

## Medicine Validation

```php id="m4x8q2"
[
    'name' => 'required|string|max:255',
    'category' => 'required',
    'stock' => 'required|numeric',
    'price' => 'required|numeric'
]
```

---

# 7. Database Tables

Modul ini menggunakan tabel:

- medicines
- prescriptions
- prescription_items

---

# 8. Business Rules

| Rule                | Description         |
| ------------------- | ------------------- |
| stock               | Tidak boleh minus   |
| expired_date        | Wajib valid         |
| prescription_status | pending / processed |

---

# 9. Error Handling

| Error        | Message                   |
| ------------ | ------------------------- |
| Empty form   | Data wajib diisi          |
| Low stock    | Stok obat tidak mencukupi |
| Unauthorized | Tidak memiliki akses      |

---

# 10. Notes

- Validasi resep otomatis mengurangi stok obat.
- Riwayat obat keluar digunakan untuk laporan apotek.
- Sistem memberikan warning stok menipis.
