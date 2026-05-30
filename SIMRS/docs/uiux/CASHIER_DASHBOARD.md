# CASHIER_DASHBOARD.md

# Cashier Dashboard UI/UX Documentation

---

# Description

Dashboard kasir digunakan untuk:

- mengelola pembayaran pasien
- melihat transaksi
- mencetak invoice
- melihat statistik pembayaran

---

# Layout Structure

```plaintext
Navbar
Sidebar
Main Content
Footer
```

---

# Sidebar Menu

- Dashboard
- Patient Bills
- Payments
- Transaction History
- Print Invoice
- Settings

---

# Dashboard Components

## Statistics Cards

Menampilkan:

- Pendapatan hari ini
- Total transaksi
- Pembayaran pending
- Pembayaran lunas

---

## Recent Transactions Table

Kolom:

- invoice
- patient name
- payment method
- total amount
- payment status
- payment date

---

## Payment Chart

Jenis:

- Grafik pemasukan harian
- Grafik transaksi bulanan

---

# UI Style

- Clean finance dashboard
- Soft shadow
- Rounded card
- Modern hospital cashier UI

---

# Responsive Rules

## Mobile

Sidebar berubah menjadi drawer.

## Desktop

Sidebar fixed di kiri.

---

# Notes

- Gunakan Tailwind CSS
- Gunakan loading skeleton
- Gunakan toast notification
