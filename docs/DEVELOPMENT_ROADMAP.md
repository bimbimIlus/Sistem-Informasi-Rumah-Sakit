# DEVELOPMENT_ROADMAP.md

# Sistem Informasi Rumah Sakit (SIMRS)

## Current Status

Overall Progress: ±45%

Current Phase:
Core Module Development

---

# PHASE 1

## Documentation Synchronization

Target Duration:
1 - 2 Hari

### Objective

Menyamakan dokumentasi dengan implementasi project.

### Tasks

- [ ] Update TRACEABILITY.md
- [ ] Update PROJECT_PROGRESS.md
- [ ] Update FEATURE_STATUS.md
- [ ] Membuat SRS_DOCTOR.md
- [ ] Membuat SRS_APPOINTMENT.md
- [ ] Membuat SRS_MEDICAL_RECORD.md
- [ ] Review Database Design
- [ ] Review Naming Convention

### Deliverables

- Dokumentasi sinkron dengan source code
- Requirement lengkap

### Status

HIGH PRIORITY

---

# PHASE 2

## Core Master Data

Target Duration:
1 Minggu

### Objective

Menyelesaikan seluruh data master rumah sakit.

### Patient Management

- [ ] Create Patient
- [ ] Read Patient
- [ ] Update Patient
- [ ] Delete Patient
- [ ] Patient Detail

### Doctor Management

- [ ] Create Doctor
- [ ] Read Doctor
- [ ] Update Doctor
- [ ] Delete Doctor
- [ ] Doctor Profile

### Medicine Management

- [ ] Create Medicine
- [ ] Read Medicine
- [ ] Update Medicine
- [ ] Delete Medicine

### Deliverables

- Master data pasien selesai
- Master data dokter selesai
- Master data obat selesai

### Status

HIGH PRIORITY

---

# PHASE 3

## Appointment Management

Target Duration:
1 Minggu

### Objective

Membangun alur janji temu pasien dengan dokter.

### Tasks

- [ ] Create Appointment
- [ ] Appointment List
- [ ] Appointment Detail
- [ ] Update Appointment Status
- [ ] Cancel Appointment
- [ ] Appointment History

### Deliverables

- Sistem janji temu berjalan

### Status

HIGH PRIORITY

---

# PHASE 4

## Medical Record Module

Target Duration:
1 - 2 Minggu

### Objective

Membangun fitur utama rumah sakit.

### Tasks

- [ ] Create Medical Record
- [ ] Edit Medical Record
- [ ] View Medical Record
- [ ] Patient Medical History
- [ ] Doctor Medical History Access
- [ ] Medical Record Validation

### Deliverables

- Rekam medis berjalan

### Status

CRITICAL

---

# PHASE 5

## Pharmacy Module

Target Duration:
1 Minggu

### Objective

Integrasi rekam medis dengan farmasi.

### Tasks

- [ ] Medicine Dispensing
- [ ] Stock Management
- [ ] Stock Reduction
- [ ] Stock Alert
- [ ] Pharmacy Dashboard

### Deliverables

- Farmasi terintegrasi

### Status

MEDIUM PRIORITY

---

# PHASE 6

## Payment & Cashier

Target Duration:
1 Minggu

### Objective

Mencatat transaksi rumah sakit.

### Tasks

- [ ] Cash Payment
- [ ] Payment Verification
- [ ] Invoice Generation
- [ ] Transaction History
- [ ] Cashier Dashboard

### Deliverables

- Sistem pembayaran berjalan

### Status

MEDIUM PRIORITY

---

# PHASE 7

## Reporting System

Target Duration:
1 Minggu

### Objective

Memberikan laporan operasional.

### Tasks

- [ ] Patient Report
- [ ] Doctor Report
- [ ] Appointment Report
- [ ] Pharmacy Report
- [ ] Financial Report

### Deliverables

- Dashboard laporan

### Status

MEDIUM PRIORITY

---

# PHASE 8

## Testing & Quality Assurance

Target Duration:
1 Minggu

### Objective

Memastikan seluruh sistem berjalan stabil.

### Unit Testing

- [ ] Model Testing
- [ ] Controller Testing
- [ ] Service Testing

### Feature Testing

- [ ] Authentication Testing
- [ ] Patient Testing
- [ ] Doctor Testing
- [ ] Medical Record Testing
- [ ] Pharmacy Testing

### Deliverables

- Testing report

### Status

HIGH PRIORITY

---

# PHASE 9

## Production Ready

Target Duration:
3 Hari

### Tasks

- [ ] Security Review
- [ ] Code Refactoring
- [ ] Documentation Finalization
- [ ] Deployment Setup
- [ ] Environment Configuration

### Deliverables

- Production-ready application

### Status

FINAL PHASE

---

# Suggested Sprint Plan

## Sprint 1

Documentation + CRUD Patient

## Sprint 2

CRUD Doctor + CRUD Medicine

## Sprint 3

Appointment Module

## Sprint 4

Medical Record Module

## Sprint 5

Pharmacy Module

## Sprint 6

Payment + Cashier

## Sprint 7

Reporting System

## Sprint 8

Testing + Deployment

---

# Definition of Done

Sebuah fitur dianggap selesai jika:

- Requirement tersedia di SRS
- Database selesai
- Backend selesai
- Frontend selesai
- Validation selesai
- Error handling tersedia
- Testing berhasil
- Dokumentasi diperbarui

Jika salah satu belum terpenuhi maka status fitur adalah IN PROGRESS.
