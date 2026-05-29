# payment-flow.md

# Payment Flow Documentation

## Description

Flow ini menjelaskan proses pembayaran pasien dalam Sistem Informasi Manajemen Rumah Sakit (SIMRS).

---

# Main Flow

```plaintext id="r8v2m4"
Pemeriksaan Selesai
      ↓
Sistem Mengambil Data Tagihan
      ↓
Kasir Melihat Total Pembayaran
      ↓
Kasir Input Metode Pembayaran
      ↓
Sistem Generate Invoice
      ↓
Pasien Melakukan Pembayaran
      ↓
Status Pembayaran Menjadi Lunas
      ↓
Invoice Dicetak
```

---

# Detailed Flow

## 1. Data Tagihan

Sistem mengambil data:

- biaya pemeriksaan
- biaya obat

---

## 2. Perhitungan Total

Sistem menghitung:

- biaya dokter
- biaya obat
- total pembayaran

---

## 3. Input Pembayaran

Kasir memilih metode pembayaran:

- cash
- transfer
- e-wallet

---

## 4. Generate Invoice

Sistem membuat invoice otomatis.

Contoh:

```plaintext id="p4x7m1"
INV-001
INV-002
```

---

## 5. Update Status

Status pembayaran berubah menjadi:

```plaintext id="k1v9q3"
paid
```

atau:

```plaintext id="n7m2x5"
unpaid
```

---

## 6. Cetak Nota

Kasir dapat mencetak:

- invoice
- struk pembayaran

---

# Related Modules

- Transactions
- Payments
- Patients
- Cashier

---

# Notes

- Invoice number harus unik.
- Pembayaran tersimpan dalam riwayat transaksi.
- Data pembayaran digunakan untuk laporan keuangan.
