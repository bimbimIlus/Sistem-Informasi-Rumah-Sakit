# REQUIREMENT TRACEABILITY MATRIX (RTM)

## Project

Sistem Informasi Rumah Sakit (SIMRS)

---

## AUTHENTICATION MODULE

| ID      | Requirement               | SRS         | API         | Backend                        | Frontend          | Status  |
| ------- | ------------------------- | ----------- | ----------- | ------------------------------ | ----------------- | ------- |
| AUTH-01 | Login User                | SRS_AUTH.md | AUTH_API.md | AuthenticatedSessionController | Auth/Login.tsx    | DONE    |
| AUTH-02 | Register User             | SRS_AUTH.md | AUTH_API.md | RegisteredUserController       | Auth/Register.tsx | DONE    |
| AUTH-03 | Logout User               | SRS_AUTH.md | AUTH_API.md | AuthenticatedSessionController | Navbar/User Menu  | DONE    |
| AUTH-04 | Session Authentication    | SRS_AUTH.md | AUTH_API.md | Middleware Auth                | Global Layout     | DONE    |
| AUTH-05 | Role Based Access Control | SRS_AUTH.md | AUTH_API.md | RoleMiddleware                 | Dashboard Modules | PARTIAL |

---

## ADMIN MODULE

| ID     | Requirement     | SRS                | Backend                  | Frontend           | Status  |
| ------ | --------------- | ------------------ | ------------------------ | ------------------ | ------- |
| ADM-01 | Dashboard Admin | ADMIN_DASHBOARD.md | Admin Controller         | Admin/Dashboard    | DONE    |
| ADM-02 | Kelola Dokter   | SRS_DOCTOR.md      | Admin/DoctorController   | Admin/Doctors      | PARTIAL |
| ADM-03 | Kelola Pasien   | SRS_PATIENT.md     | Admin/PatientController  | Admin/Patients     | PARTIAL |
| ADM-04 | Kelola Obat     | SRS_PHARMACY.md    | Admin/MedicineController | Admin/Medicines    | PARTIAL |
| ADM-05 | Kelola Jadwal   | SRS_APPOINTMENT.md | Appointment Controller   | Admin/Appointments | PARTIAL |

---

## PATIENT MODULE

| ID     | Requirement         | SRS            | Backend                   | Frontend            | Status  |
| ------ | ------------------- | -------------- | ------------------------- | ------------------- | ------- |
| PAT-01 | CRUD Pasien         | SRS_PATIENT.md | Patient Controller        | Admin/Patients      | PARTIAL |
| PAT-02 | Detail Pasien       | SRS_PATIENT.md | Patient Controller        | Detail Patient Page | TODO    |
| PAT-03 | Riwayat Rekam Medis | SRS_PATIENT.md | Medical Record Controller | Medical Records     | TODO    |

---

## DOCTOR MODULE

| ID     | Requirement   | SRS           | Backend                | Frontend           | Status  |
| ------ | ------------- | ------------- | ---------------------- | ------------------ | ------- |
| DOC-01 | CRUD Dokter   | SRS_DOCTOR.md | Doctor Controller      | Admin/Doctors      | PARTIAL |
| DOC-02 | Profil Dokter | SRS_DOCTOR.md | Doctor Controller      | Doctor Dashboard   | TODO    |
| DOC-03 | Jadwal Dokter | SRS_DOCTOR.md | Appointment Controller | Appointment Module | PARTIAL |

---

## APPOINTMENT MODULE

| ID     | Requirement         | SRS                | Backend                | Frontend               | Status  |
| ------ | ------------------- | ------------------ | ---------------------- | ---------------------- | ------- |
| APP-01 | Buat Janji Temu     | SRS_APPOINTMENT.md | Appointment Controller | Appointment Page       | PARTIAL |
| APP-02 | Lihat Jadwal Janji  | SRS_APPOINTMENT.md | Appointment Controller | Appointment List       | PARTIAL |
| APP-03 | Update Status Janji | SRS_APPOINTMENT.md | Appointment Controller | Appointment Management | TODO    |

---

## MEDICAL RECORD MODULE

| ID    | Requirement               | SRS                   | Backend                  | Frontend        | Status  |
| ----- | ------------------------- | --------------------- | ------------------------ | --------------- | ------- |
| MR-01 | Tambah Rekam Medis        | SRS_MEDICAL_RECORD.md | MedicalRecord Controller | Medical Records | PARTIAL |
| MR-02 | Edit Rekam Medis          | SRS_MEDICAL_RECORD.md | MedicalRecord Controller | Medical Records | TODO    |
| MR-03 | Lihat Riwayat Rekam Medis | SRS_MEDICAL_RECORD.md | MedicalRecord Controller | Medical Records | TODO    |

---

## PHARMACY MODULE

| ID     | Requirement      | SRS             | Backend             | Frontend           | Status  |
| ------ | ---------------- | --------------- | ------------------- | ------------------ | ------- |
| PHM-01 | CRUD Obat        | SRS_PHARMACY.md | Medicine Controller | Admin/Medicines    | PARTIAL |
| PHM-02 | Manajemen Stok   | SRS_PHARMACY.md | Medicine Controller | Pharmacy Dashboard | TODO    |
| PHM-03 | Pengeluaran Obat | SRS_PHARMACY.md | Pharmacy Controller | Pharmacy Dashboard | TODO    |

---

## PAYMENT MODULE

| ID     | Requirement        | SRS            | API            | Backend                 | Frontend          | Status  |
| ------ | ------------------ | -------------- | -------------- | ----------------------- | ----------------- | ------- |
| PAY-01 | Pembayaran Tunai   | SRS_PAYMENT.md | PAYMENT_API.md | Payment Controller      | Cashier Dashboard | PLANNED |
| PAY-02 | Pembayaran Digital | SRS_PAYMENT.md | PAYMENT_API.md | Payment Gateway Service | Cashier Dashboard | PLANNED |
| PAY-03 | Generate Invoice   | SRS_PAYMENT.md | PAYMENT_API.md | Invoice Service         | Cashier Dashboard | PLANNED |

---

## CASHIER MODULE

| ID     | Requirement           | SRS                  | Backend            | Frontend          | Status  |
| ------ | --------------------- | -------------------- | ------------------ | ----------------- | ------- |
| CSH-01 | Dashboard Kasir       | CASHIER_DASHBOARD.md | Cashier Controller | Cashier Dashboard | PLANNED |
| CSH-02 | Verifikasi Pembayaran | SRS_PAYMENT.md       | Payment Controller | Cashier Dashboard | PLANNED |
| CSH-03 | Cetak Invoice         | SRS_PAYMENT.md       | Invoice Service    | Cashier Dashboard | PLANNED |

---

## DOCUMENTATION GAP

### Sudah Ada Implementasi Tetapi Belum Ada SRS

- SRS_DOCTOR.md
- SRS_APPOINTMENT.md
- SRS_MEDICAL_RECORD.md

### Sudah Ada Desain Dashboard Tetapi Belum Ada Implementasi Lengkap

- CASHIER_DASHBOARD.md
- DOCTOR_DASHBOARD.md
- PHARMACY_DASHBOARD.md

### Perlu Perbaikan Naming

- Patiens → Patients

---

## PROJECT STATUS SUMMARY

| Module             | Progress |
| ------------------ | -------- |
| Authentication     | 90%      |
| Admin Dashboard    | 70%      |
| Patient Management | 50%      |
| Doctor Management  | 50%      |
| Appointment        | 40%      |
| Medical Record     | 30%      |
| Pharmacy           | 35%      |
| Payment            | 10%      |
| Cashier            | 10%      |

---

Overall Project Progress: ±45%
