# SRS_PATIENT.md

# Software Requirement Specification

# Patient Module

---

# 1. Module Description

Modul patient digunakan untuk mengelola data pasien rumah sakit.

Fitur utama:

- tambah pasien
- edit pasien
- hapus pasien
- detail pasien
- riwayat pasien

---

# 2. Objectives

Tujuan modul:

- mempermudah pengelolaan data pasien
- menyimpan riwayat pasien
- mempercepat proses registrasi

---

# 3. Actors

| Actor  | Description           |
| ------ | --------------------- |
| Admin  | Mengelola data pasien |
| Dokter | Melihat data pasien   |

---

# 4. Functional Requirements

## 4.1 Create Patient

### Description

Admin dapat menambahkan data pasien baru.

### Input

- nama pasien
- jenis kelamin
- tanggal lahir
- nomor telepon
- alamat
- foto pasien

### Process

- Sistem generate nomor rekam medis otomatis
- Sistem menyimpan data pasien

### Output

- Data pasien berhasil ditambahkan

---

## 4.2 Update Patient

### Description

Admin dapat mengupdate data pasien.

### Process

- Sistem memperbarui data pasien

### Output

- Data pasien berhasil diupdate

---

## 4.3 Delete Patient

### Description

Admin dapat menghapus data pasien.

### Rules

- Data pemeriksaan terkait ikut terhapus

### Output

- Data pasien berhasil dihapus

---

## 4.4 Patient Detail

### Description

Menampilkan detail pasien.

### Information Displayed

- nomor rekam medis
- nama pasien
- alamat
- nomor telepon
- riwayat pemeriksaan
- riwayat pembayaran

---

## 4.5 Patient History

### Description

Menampilkan seluruh riwayat pasien.

### Includes

- pemeriksaan
- resep
- transaksi pembayaran

---

# 5. Non Functional Requirements

| Requirement | Description                          |
| ----------- | ------------------------------------ |
| Database    | Menggunakan MySQL                    |
| Response    | Maksimal 3 detik                     |
| Security    | Hanya admin & dokter dapat mengakses |

---

# 6. Validation Rules

## Create Patient Validation

```php id="k7x2q5"
[
    'name' => 'required|string|max:255',
    'gender' => 'required',
    'birth_date' => 'required|date',
    'phone' => 'required',
    'address' => 'required'
]
```

---

# 7. Database Tables

Modul ini menggunakan tabel:

- patients
- examinations
- prescriptions
- transactions

---

# 8. Business Rules

| Rule           | Description                   |
| -------------- | ----------------------------- |
| no_rm          | Harus unik                    |
| patient_delete | Menghapus relasi data terkait |
| patient_access | Hanya role tertentu           |

---

# 9. Error Handling

| Error        | Message                           |
| ------------ | --------------------------------- |
| Empty form   | Data wajib diisi                  |
| Duplicate RM | Nomor rekam medis sudah digunakan |
| Unauthorized | Tidak memiliki akses              |

---

# 10. Notes

- Nomor rekam medis dibuat otomatis.
- Data pasien terintegrasi dengan pemeriksaan dan pembayaran.
- Foto pasien bersifat optional.
