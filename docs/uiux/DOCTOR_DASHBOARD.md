# DOCTOR_DASHBOARD.md

# Doctor Dashboard UI/UX Documentation

---

# Description

Dashboard dokter digunakan untuk:

- melihat antrian pasien
- melakukan pemeriksaan
- membuat resep
- melihat riwayat pemeriksaan

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
- Patient Queue
- Examinations
- Prescriptions
- Medical History
- Schedule

---

# Dashboard Components

## Statistics Cards

Menampilkan:

- Jumlah pasien hari ini
- Total pemeriksaan
- Jumlah resep
- Jadwal praktik

---

## Patient Queue Table

Kolom:

- queue number
- patient name
- complaint
- status

---

## Recent Examination

Menampilkan:

- pasien terbaru
- diagnosa
- tindakan

---

# UI Style

- Clean medical dashboard
- Focus on readability
- Large form input
- Minimal distraction

---

# Responsive Rules

## Mobile

Sidebar menjadi drawer.

## Desktop

Sidebar fixed di kiri.

---

# Notes

- Fokus pada kemudahan input pemeriksaan.
- Gunakan form layout yang rapi.
- Gunakan auto save draft optional.
