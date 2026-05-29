# AUTH_API.md

# Authentication API Documentation

## Base URL

```bash
http://localhost:8000/api
```

---

# 1. Login User

## Endpoint

```bash
POST /login
```

## Description

Digunakan untuk proses login user ke dalam sistem.

---

## Request Body

```json
{
    "email": "admin@simrs.com",
    "password": "password"
}
```

---

## Validation

| Field    | Type   | Required |
| -------- | ------ | -------- |
| email    | string | yes      |
| password | string | yes      |

---

## Success Response

```json
{
    "success": true,
    "message": "Login berhasil",
    "token": "1|laravel_sanctum_token",
    "user": {
        "id": 1,
        "name": "Administrator",
        "email": "admin@simrs.com",
        "role": "admin"
    }
}
```

---

## Failed Response

```json
{
    "success": false,
    "message": "Email atau password salah"
}
```

---

# 2. Logout User

## Endpoint

```bash
POST /logout
```

## Headers

```bash
Authorization: Bearer token
```

---

## Description

Digunakan untuk logout user dan menghapus token login.

---

## Success Response

```json
{
    "success": true,
    "message": "Logout berhasil"
}
```

---

# 3. Get Auth User

## Endpoint

```bash
GET /user
```

## Headers

```bash
Authorization: Bearer token
```

---

## Description

Mengambil data user yang sedang login.

---

## Success Response

```json
{
    "id": 1,
    "name": "Administrator",
    "email": "admin@simrs.com",
    "role": "admin"
}
```

---

# Authentication

Menggunakan:

- Laravel Sanctum
- Bearer Token Authentication

---

# Roles

Role yang tersedia:

- admin
- dokter
- kasir
- apoteker

---

# Middleware

Middleware yang digunakan:

- auth:sanctum
- role:admin
- role:dokter
- role:kasir
- role:apoteker
