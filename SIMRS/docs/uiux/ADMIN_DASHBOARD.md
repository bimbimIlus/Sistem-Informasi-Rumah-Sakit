# ADMIN_DASHBOARD.md

# Admin Dashboard UI/UX Documentation

---

# Description

Dashboard admin digunakan untuk mengelola seluruh sistem rumah sakit.

---

# Layout Structure

```plaintext id="p7x1m4"
Navbar
Sidebar
Main Content
Footer
```

---

# Sidebar Menu

- Dashboard
- User Management
- Patients
- Doctors
- Medicines
- Transactions
- Reports
- Settings

---

# Dashboard Components

## Statistics Cards

Menampilkan:

- Total pasien
- Total dokter
- Total obat
- Pendapatan hari ini

---

## Charts

Jenis chart:

- Grafik kunjungan pasien
- Grafik pendapatan

---

## Recent Transactions

Table:

- invoice
- patient
- payment status
- amount

---

# UI Style

- Clean dashboard
- Modern hospital theme
- Soft shadow cards
- Rounded corners
- Blue primary color

---

# Responsive Rules

## Mobile

Sidebar berubah menjadi drawer.

## Desktop

Sidebar fixed di kiri.

---

# Notes

- Gunakan Tailwind CSS.
- Gunakan dark mode optional.
- Gunakan loading skeleton.
