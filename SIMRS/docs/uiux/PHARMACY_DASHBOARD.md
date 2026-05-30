# PHARMACY_DASHBOARD.md

# Pharmacy Dashboard UI/UX Documentation

---

# Description

Dashboard apotek digunakan untuk:

- mengelola stok obat
- melihat resep masuk
- validasi resep
- melihat obat keluar

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
- Medicines
- Medicine Stock
- Incoming Prescriptions
- Outgoing Medicines
- Reports

---

# Dashboard Components

## Statistics Cards

Menampilkan:

- Total obat
- Stok menipis
- Resep hari ini
- Obat keluar hari ini

---

## Medicines Table

Kolom:

- medicine name
- category
- stock
- expired date
- price

---

## Incoming Prescription Table

Kolom:

- patient
- doctor
- medicine
- dosage
- status

---

# UI Style

- Modern pharmacy dashboard
- Clean inventory management
- Responsive table
- Status badge color

---

# Responsive Rules

## Mobile

Sidebar drawer.

## Desktop

Sidebar fixed.

---

# Notes

- Gunakan warning color untuk stok menipis.
- Gunakan searchable table.
- Gunakan pagination.
