# SRS_MEDICAL_RECORD.md

# Software Requirements Specification

## Medical Record Module

### Document Information

| Item    | Value          |
| ------- | -------------- |
| Module  | Medical Record |
| System  | SIMRS          |
| Version | 1.0            |
| Status  | Draft          |

---

# 1. Purpose

Modul Rekam Medis digunakan untuk menyimpan dan mengelola data pemeriksaan pasien.

---

# 2. Objectives

- Menyimpan riwayat pemeriksaan.
- Menyimpan diagnosis dokter.
- Menyimpan tindakan medis.
- Menyimpan resep obat.

---

# 3. Functional Requirements

## FR-MR-01 Create Medical Record

Dokter dapat membuat rekam medis baru.

### Input

- Pasien
- Dokter
- Keluhan
- Diagnosa
- Tindakan
- Catatan
- Resep Obat

### Output

Rekam medis tersimpan.

---

## FR-MR-02 View Medical Record

Menampilkan daftar rekam medis.

---

## FR-MR-03 Detail Medical Record

Menampilkan detail rekam medis.

### Output

- Informasi Pasien
- Informasi Dokter
- Diagnosa
- Tindakan
- Resep

---

## FR-MR-04 Update Medical Record

Dokter dapat mengubah rekam medis.

---

## FR-MR-05 Medical History

Menampilkan riwayat pemeriksaan pasien.

---

# 4. User Roles

| Role   | Access           |
| ------ | ---------------- |
| Admin  | View             |
| Dokter | CRUD             |
| Pasien | View Own History |

---

# 5. Validation Rules

- Pasien wajib dipilih.
- Dokter wajib dipilih.
- Diagnosa wajib diisi.
- Keluhan wajib diisi.

---

# 6. Dependencies

- Doctor Module
- Patient Module
- Appointment Module
- Pharmacy Module

---

# 7. Future Integration

- Pharmacy Module
- Billing Module
- Reporting Module
