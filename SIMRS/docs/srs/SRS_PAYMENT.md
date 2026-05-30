# SRS_PAYMENT.md

# Software Requirement Specification

# Payment Module

---

# 1. Module Description

Modul payment digunakan untuk mengelola proses pembayaran pasien rumah sakit.

Fitur utama:

- melihat tagihan pasien
- menghitung total pembayaran
- input pembayaran
- generate invoice
- riwayat transaksi

---

# 2. Objectives

Tujuan modul:

- mempercepat proses pembayaran
- mengurangi kesalahan transaksi
- menyimpan riwayat pembayaran
- mempermudah laporan keuangan

---

# 3. Actors

| Actor | Description                 |
| ----- | --------------------------- |
| Kasir | Mengelola pembayaran pasien |
| Admin | Melihat laporan transaksi   |

---

# 4. Functional Requirements

## 4.1 View Patient Bill

### Description

Kasir dapat melihat tagihan pasien.

### Information Displayed

- nama pasien
- biaya dokter
- biaya obat
- total pembayaran
- status pembayaran

---

## 4.2 Calculate Total Payment

### Description

Sistem menghitung total pembayaran otomatis.

### Formula

Total pembayaran = biaya dokter + biaya obat

---

## 4.3 Create Payment

### Description

Kasir melakukan input pembayaran pasien.

### Input

- patient_id
- payment_method
- total_payment

### Process

- Sistem menyimpan transaksi
- Sistem mengubah status pembayaran menjadi paid

### Output

- Pembayaran berhasil

---

## 4.4 Generate Invoice

### Description

Sistem membuat invoice otomatis.

### Invoice Information

- nomor invoice
- nama pasien
- total pembayaran
- tanggal pembayaran

---

## 4.5 Print Invoice

### Description

Kasir dapat mencetak invoice pembayaran.

---

## 4.6 Transaction History

### Description

Menampilkan seluruh riwayat transaksi pembayaran.

### Includes

- invoice number
- patient name
- total payment
- payment status
- payment date

---

# 5. Non Functional Requirements

| Requirement | Description               |
| ----------- | ------------------------- |
| Performance | Response maksimal 3 detik |
| Security    | Hanya kasir & admin       |
| Database    | Menggunakan MySQL         |

---

# 6. Validation Rules

## Create Payment Validation

```php id="v8k2m5"
[
    'patient_id' => 'required',
    'payment_method' => 'required',
    'total_payment' => 'required|numeric'
]
```

---

# 7. Database Tables

Modul ini menggunakan tabel:

- transactions
- patients
- users

---

# 8. Business Rules

| Rule           | Description       |
| -------------- | ----------------- |
| invoice_number | Harus unik        |
| payment_status | paid / unpaid     |
| total_amount   | Dihitung otomatis |

---

# 9. Error Handling

| Error           | Message              |
| --------------- | -------------------- |
| Empty form      | Data wajib diisi     |
| Invalid payment | Pembayaran gagal     |
| Unauthorized    | Tidak memiliki akses |

---

# 10. Notes

- Invoice dibuat otomatis oleh sistem.
- Riwayat pembayaran digunakan untuk laporan keuangan.
- Hanya role kasir yang dapat membuat pembayaran.
