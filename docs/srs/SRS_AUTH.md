# SRS_AUTH.md

# Software Requirement Specification

# Authentication & Authorization Module

---

# 1. Module Description

Modul authentication digunakan untuk:

- login user
- logout user
- manajemen session
- pembatasan hak akses berdasarkan role

---

# 2. Objectives

Tujuan modul:

- menjaga keamanan sistem
- membatasi akses berdasarkan role
- mengelola autentikasi user

---

# 3. User Roles

| Role     | Description              |
| -------- | ------------------------ |
| admin    | Mengelola seluruh sistem |
| dokter   | Pemeriksaan pasien       |
| kasir    | Pembayaran pasien        |
| apoteker | Pengelolaan obat         |

---

# 4. Functional Requirements

## 4.1 Login

### Description

User dapat login menggunakan email dan password.

### Input

- email
- password

### Process

- Sistem memvalidasi email dan password
- Sistem mengecek role user
- Sistem membuat session/token login

### Output

- Redirect ke dashboard sesuai role

---

## 4.2 Logout

### Description

User dapat logout dari sistem.

### Process

- Sistem menghapus session/token login

### Output

- Redirect ke halaman login

---

## 4.3 Authentication Middleware

### Description

Sistem membatasi akses halaman berdasarkan login.

### Rules

- User yang belum login tidak dapat mengakses dashboard.
- User wajib login sebelum menggunakan sistem.

---

## 4.4 Role Authorization

### Description

Sistem membatasi akses berdasarkan role.

### Rules

#### Admin

Dapat mengakses:

- dashboard admin
- data user
- data pasien
- laporan

#### Dokter

Dapat mengakses:

- pemeriksaan pasien
- resep
- jadwal praktik

#### Kasir

Dapat mengakses:

- pembayaran
- invoice
- transaksi

#### Apoteker

Dapat mengakses:

- data obat
- resep masuk
- stok obat

---

# 5. Non Functional Requirements

| Requirement    | Description                    |
| -------------- | ------------------------------ |
| Security       | Password menggunakan hashing   |
| Authentication | Menggunakan Laravel Sanctum    |
| Session        | Auto logout jika token invalid |
| Performance    | Response maksimal 3 detik      |

---

# 6. Validation Rules

## Login Validation

```php id="w4v1m7"
[
    'email' => 'required|email',
    'password' => 'required|min:8'
]
```

---

# 7. Database Tables

Modul ini menggunakan tabel:

- users
- personal_access_tokens

---

# 8. Technologies

- Laravel
- Laravel Breeze
- Laravel Sanctum
- MySQL

---

# 9. Error Handling

| Error          | Message               |
| -------------- | --------------------- |
| Invalid email  | Email tidak ditemukan |
| Wrong password | Password salah        |
| Unauthorized   | Tidak memiliki akses  |

---

# 10. Notes

- Semua route dashboard menggunakan middleware auth.
- Sistem menggunakan role-based access control.
