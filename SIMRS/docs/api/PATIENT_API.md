# PATIENT_API.md

# Patient API Documentation

## Base URL

```bash id="l2x8d0"
http://localhost:8000/api
```

---

# 1. Get All Patients

## Endpoint

```bash id="j7b2r1"
GET /patients
```

## Description

Mengambil seluruh data pasien.

---

## Headers

```bash id="j2p8o9"
Authorization: Bearer token
```

---

## Success Response

```json id="b4k0q1"
{
    "success": true,
    "data": [
        {
            "id": 1,
            "no_rm": "RM001",
            "name": "Budi Santoso",
            "gender": "Laki-laki",
            "birth_date": "2000-01-10",
            "phone": "08123456789",
            "address": "Yogyakarta"
        }
    ]
}
```

---

# 2. Create Patient

## Endpoint

```bash id="z0n9c2"
POST /patients
```

---

## Request Body

```json id="e5q9m1"
{
    "name": "Budi Santoso",
    "gender": "Laki-laki",
    "birth_date": "2000-01-10",
    "phone": "08123456789",
    "address": "Yogyakarta"
}
```

---

## Validation

| Field      | Type   | Required |
| ---------- | ------ | -------- |
| name       | string | yes      |
| gender     | string | yes      |
| birth_date | date   | yes      |
| phone      | string | yes      |
| address    | text   | yes      |

---

## Success Response

```json id="w8m3r2"
{
    "success": true,
    "message": "Data pasien berhasil ditambahkan"
}
```

---

# 3. Get Detail Patient

## Endpoint

```bash id="g6k4f8"
GET /patients/{id}
```

---

## Description

Mengambil detail pasien berdasarkan ID.

---

## Success Response

```json id="t2v0d5"
{
    "success": true,
    "data": {
        "id": 1,
        "no_rm": "RM001",
        "name": "Budi Santoso",
        "gender": "Laki-laki",
        "birth_date": "2000-01-10",
        "phone": "08123456789",
        "address": "Yogyakarta"
    }
}
```

---

# 4. Update Patient

## Endpoint

```bash id="p1z4n9"
PUT /patients/{id}
```

---

## Request Body

```json id="d7w3c8"
{
    "name": "Budi Update",
    "phone": "089999999"
}
```

---

## Success Response

```json id="u5j8k0"
{
    "success": true,
    "message": "Data pasien berhasil diupdate"
}
```

---

# 5. Delete Patient

## Endpoint

```bash id="r8x5m1"
DELETE /patients/{id}
```

---

## Success Response

```json id="q2l4f9"
{
    "success": true,
    "message": "Data pasien berhasil dihapus"
}
```
