# SRS_DOCTOR.md

# Software Requirements Specification

## Doctor Management Module

### Document Information

| Item    | Value                                |
| ------- | ------------------------------------ |
| Module  | Doctor Management                    |
| System  | Sistem Informasi Rumah Sakit (SIMRS) |
| Version | 1.0                                  |
| Status  | Draft                                |

---

# 1. Purpose

Modul Doctor Management digunakan untuk mengelola data dokter yang bekerja pada rumah sakit.

---

# 2. Objectives

- Menyimpan data dokter.
- Mengelola profil dokter.
- Mengelola spesialisasi dokter.
- Mengelola status aktif dokter.
- Menampilkan daftar dokter.

---

# 3. Functional Requirements

## FR-DOC-01 Create Doctor

Admin dapat menambahkan data dokter baru.

### Input

- Nama Dokter
- Email
- Nomor Telepon
- Alamat
- Spesialisasi
- SIP
- Status

### Output

Data dokter tersimpan.

---

## FR-DOC-02 View Doctor

Admin dapat melihat daftar dokter.

### Output

- Nama Dokter
- Spesialisasi
- Status

---

## FR-DOC-03 Update Doctor

Admin dapat mengubah data dokter.

---

## FR-DOC-04 Delete Doctor

Admin dapat menghapus data dokter.

---

## FR-DOC-05 Doctor Detail

Admin dapat melihat detail dokter.

### Output

- Biodata Dokter
- Riwayat Praktik
- Jadwal Dokter

---

# 4. User Roles

| Role   | Access           |
| ------ | ---------------- |
| Admin  | Full Access      |
| Dokter | View Own Profile |

---

# 5. Validation Rules

- Nama wajib diisi.
- Email harus unik.
- SIP harus unik.
- Nomor telepon wajib diisi.

---

# 6. Dependencies

- Authentication Module
- Role Middleware
