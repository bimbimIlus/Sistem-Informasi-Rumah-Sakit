# FEATURE_STATUS.md

# Sistem Informasi Rumah Sakit (SIMRS)

## Legend

| Status         | Keterangan                        |
| -------------- | --------------------------------- |
| ✅ DONE        | Fitur selesai dan dapat digunakan |
| 🚧 IN PROGRESS | Sedang dikembangkan               |
| 🧪 TESTING     | Sedang diuji                      |
| 📋 PLANNED     | Sudah direncanakan                |
| ❌ NOT STARTED | Belum dikerjakan                  |

---

# AUTHENTICATION MODULE

| Feature            | Status         | Notes                        |
| ------------------ | -------------- | ---------------------------- |
| Login              | ✅ DONE        | Laravel Authentication       |
| Register           | ✅ DONE        | Laravel Authentication       |
| Logout             | ✅ DONE        | Session Logout               |
| Session Management | ✅ DONE        | Auth Middleware              |
| Role Middleware    | 🚧 IN PROGRESS | Perlu pengujian seluruh role |
| Forgot Password    | ❌ NOT STARTED | Belum dibuat                 |
| Email Verification | ❌ NOT STARTED | Belum dibuat                 |

---

# ADMIN MODULE

| Feature            | Status         | Notes                       |
| ------------------ | -------------- | --------------------------- |
| Dashboard Layout   | ✅ DONE        | Struktur dashboard tersedia |
| Sidebar Navigation | ✅ DONE        | Sudah tersedia              |
| Route Protection   | ✅ DONE        | Middleware aktif            |
| Statistics Widget  | ❌ NOT STARTED | Menunggu data riil          |
| User Management    | 📋 PLANNED     | Belum dibuat                |

---

# PATIENT MODULE

| Feature         | Status         | Notes              |
| --------------- | -------------- | ------------------ |
| Patient Page    | ✅ DONE        | Halaman tersedia   |
| Patient List    | 🚧 IN PROGRESS | Data belum lengkap |
| Add Patient     | 🚧 IN PROGRESS | Backend sebagian   |
| Edit Patient    | 🚧 IN PROGRESS | Belum final        |
| Delete Patient  | 🚧 IN PROGRESS | Belum final        |
| Patient Detail  | ❌ NOT STARTED | Belum dibuat       |
| Search Patient  | ❌ NOT STARTED | Belum dibuat       |
| Patient History | ❌ NOT STARTED | Belum dibuat       |

---

# DOCTOR MODULE

| Feature         | Status         | Notes             |
| --------------- | -------------- | ----------------- |
| Doctor Page     | ✅ DONE        | Struktur tersedia |
| Doctor List     | 🚧 IN PROGRESS | Data belum final  |
| Add Doctor      | 🚧 IN PROGRESS | Backend sebagian  |
| Edit Doctor     | 🚧 IN PROGRESS | Belum final       |
| Delete Doctor   | 🚧 IN PROGRESS | Belum final       |
| Doctor Schedule | ❌ NOT STARTED | Belum dibuat      |
| Doctor Profile  | ❌ NOT STARTED | Belum dibuat      |

---

# APPOINTMENT MODULE

| Feature             | Status         | Notes             |
| ------------------- | -------------- | ----------------- |
| Appointment Page    | ✅ DONE        | Struktur tersedia |
| Appointment List    | 🚧 IN PROGRESS | Belum final       |
| Create Appointment  | 🚧 IN PROGRESS | Belum final       |
| Update Appointment  | ❌ NOT STARTED | Belum dibuat      |
| Appointment Status  | ❌ NOT STARTED | Belum dibuat      |
| Appointment History | ❌ NOT STARTED | Belum dibuat      |

---

# MEDICAL RECORD MODULE

| Feature                   | Status         | Notes             |
| ------------------------- | -------------- | ----------------- |
| Medical Record Page       | ✅ DONE        | Struktur tersedia |
| Add Medical Record        | 🚧 IN PROGRESS | Belum final       |
| Edit Medical Record       | ❌ NOT STARTED | Belum dibuat      |
| Delete Medical Record     | ❌ NOT STARTED | Belum dibuat      |
| Medical Record History    | ❌ NOT STARTED | Belum dibuat      |
| Medical Record Validation | ❌ NOT STARTED | Belum dibuat      |

---

# PHARMACY MODULE

| Feature             | Status         | Notes             |
| ------------------- | -------------- | ----------------- |
| Medicine Page       | ✅ DONE        | Struktur tersedia |
| Medicine List       | 🚧 IN PROGRESS | Belum final       |
| Add Medicine        | 🚧 IN PROGRESS | Belum final       |
| Edit Medicine       | 🚧 IN PROGRESS | Belum final       |
| Delete Medicine     | 🚧 IN PROGRESS | Belum final       |
| Stock Management    | ❌ NOT STARTED | Belum dibuat      |
| Stock Alert         | ❌ NOT STARTED | Belum dibuat      |
| Medicine Dispensing | ❌ NOT STARTED | Belum dibuat      |

---

# PAYMENT MODULE

| Feature             | Status     | Notes                    |
| ------------------- | ---------- | ------------------------ |
| Cash Payment        | 📋 PLANNED | Menunggu modul kasir     |
| Digital Payment     | 📋 PLANNED | Menunggu payment gateway |
| Invoice Generation  | 📋 PLANNED | Belum dibuat             |
| Transaction History | 📋 PLANNED | Belum dibuat             |
| Payment Validation  | 📋 PLANNED | Belum dibuat             |

---

# CASHIER MODULE

| Feature              | Status     | Notes        |
| -------------------- | ---------- | ------------ |
| Cashier Dashboard    | 📋 PLANNED | Belum dibuat |
| Payment Verification | 📋 PLANNED | Belum dibuat |
| Receipt Printing     | 📋 PLANNED | Belum dibuat |
| Daily Report         | 📋 PLANNED | Belum dibuat |

---

# REPORTING MODULE

| Feature              | Status         | Notes        |
| -------------------- | -------------- | ------------ |
| Dashboard Statistics | ❌ NOT STARTED | Belum dibuat |
| Patient Report       | ❌ NOT STARTED | Belum dibuat |
| Doctor Report        | ❌ NOT STARTED | Belum dibuat |
| Pharmacy Report      | ❌ NOT STARTED | Belum dibuat |
| Financial Report     | ❌ NOT STARTED | Belum dibuat |

---

# TESTING STATUS

| Area                | Status         |
| ------------------- | -------------- |
| Unit Testing        | ❌ NOT STARTED |
| Feature Testing     | ❌ NOT STARTED |
| Integration Testing | ❌ NOT STARTED |
| UAT Testing         | ❌ NOT STARTED |

---

# PRIORITY ROADMAP

## HIGH PRIORITY

- CRUD Pasien
- CRUD Dokter
- CRUD Rekam Medis
- CRUD Obat
- Appointment Management

## MEDIUM PRIORITY

- Dashboard Analytics
- Reporting System
- Stock Management

## LOW PRIORITY

- Payment Gateway
- Invoice Generator
- Financial Reporting

---

# Current Focus

Sprint Target:

- Menyelesaikan CRUD Pasien
- Menyelesaikan CRUD Dokter
- Menyelesaikan CRUD Obat
- Menyelesaikan CRUD Rekam Medis
- Membuat SRS_DOCTOR
- Membuat SRS_APPOINTMENT
- Membuat SRS_MEDICAL_RECORD

Last Updated: 30 Mei 2026
