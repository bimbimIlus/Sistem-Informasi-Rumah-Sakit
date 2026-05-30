# SRS_APPOINTMENT.md

# Software Requirements Specification

## Appointment Management Module

### Document Information

| Item    | Value       |
| ------- | ----------- |
| Module  | Appointment |
| System  | SIMRS       |
| Version | 1.0         |
| Status  | Draft       |

---

# 1. Purpose

Modul Appointment digunakan untuk mengatur janji temu pasien dengan dokter.

---

# 2. Objectives

- Membuat janji temu.
- Melihat jadwal konsultasi.
- Mengubah status janji temu.
- Menyimpan riwayat konsultasi.

---

# 3. Functional Requirements

## FR-APP-01 Create Appointment

Pasien atau Admin dapat membuat janji temu.

### Input

- Pasien
- Dokter
- Tanggal
- Jam
- Keluhan Awal

### Output

Appointment berhasil dibuat.

---

## FR-APP-02 View Appointment

Menampilkan daftar janji temu.

### Output

- Nomor Appointment
- Nama Pasien
- Nama Dokter
- Jadwal
- Status

---

## FR-APP-03 Update Appointment

Mengubah data appointment.

---

## FR-APP-04 Cancel Appointment

Membatalkan appointment.

---

## FR-APP-05 Update Status

Status appointment dapat berubah menjadi:

- Pending
- Approved
- Completed
- Cancelled

---

# 4. User Roles

| Role   | Access               |
| ------ | -------------------- |
| Admin  | Full Access          |
| Dokter | View & Update Status |
| Pasien | Create & View        |

---

# 5. Validation Rules

- Dokter wajib dipilih.
- Pasien wajib dipilih.
- Jadwal tidak boleh kosong.
- Tidak boleh ada jadwal bentrok.

---

# 6. Dependencies

- Doctor Module
- Patient Module
- Authentication Module
