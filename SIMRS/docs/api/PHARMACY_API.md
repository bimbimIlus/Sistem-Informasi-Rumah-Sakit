# PHARMACY_API.md

# Pharmacy API Documentation

## Base URL

```bash id="x7m2q9"
http://localhost:8000/api
```

---

# 1. Get All Medicines

## Endpoint

```bash id="w4p8n1"
GET /medicines
```

---

## Description

Mengambil seluruh data obat.

---

## Headers

```bash id="n2v5c7"
Authorization: Bearer token
```

---

## Success Response

```json id="g8k1q3"
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Paracetamol",
            "category": "Tablet",
            "stock": 100,
            "price": 5000,
            "expired_date": "2027-01-10"
        }
    ]
}
```

---

# 2. Create Medicine

## Endpoint

```bash id="f9x3m2"
POST /medicines
```

---

## Request Body

```json id="u1k7p8"
{
    "name": "Amoxicillin",
    "category": "Capsule",
    "stock": 50,
    "price": 10000,
    "expired_date": "2027-05-20"
}
```

---

## Validation

| Field        | Type    | Required |
| ------------ | ------- | -------- |
| name         | string  | yes      |
| category     | string  | yes      |
| stock        | integer | yes      |
| price        | integer | yes      |
| expired_date | date    | yes      |

---

## Success Response

```json id="m5r0x4"
{
    "success": true,
    "message": "Obat berhasil ditambahkan"
}
```

---

# 3. Update Medicine Stock

## Endpoint

```bash id="q2w9v6"
PUT /medicines/{id}
```

---

## Request Body

```json id="l4n8c1"
{
    "stock": 120
}
```

---

## Description

Mengupdate stok obat.

---

## Success Response

```json id="b7k3f0"
{
    "success": true,
    "message": "Stok obat berhasil diupdate"
}
```

---

# 4. Delete Medicine

## Endpoint

```bash id="c1p5z8"
DELETE /medicines/{id}
```

---

## Success Response

```json id="d8x2q4"
{
    "success": true,
    "message": "Obat berhasil dihapus"
}
```

---

# 5. Get Incoming Prescriptions

## Endpoint

```bash id="v6n1m7"
GET /pharmacy/prescriptions
```

---

## Description

Menampilkan daftar resep masuk dari dokter.

---

## Success Response

```json id="t3q8k5"
{
    "success": true,
    "data": [
        {
            "prescription_id": 1,
            "patient_name": "Budi Santoso",
            "doctor_name": "Dr. Andi",
            "medicine": "Paracetamol",
            "dosage": "3x1 sehari",
            "status": "pending"
        }
    ]
}
```

---

# 6. Validate Prescription

## Endpoint

```bash id="k9v4x2"
POST /pharmacy/prescriptions/{id}/validate
```

---

## Description

Validasi resep dan proses pengeluaran obat.

---

## Success Response

```json id="r1m7p6"
{
    "success": true,
    "message": "Resep berhasil divalidasi"
}
```

---

# 7. Medicine Outgoing History

## Endpoint

```bash id="y5n2w8"
GET /pharmacy/outgoing-medicines
```

---

## Description

Menampilkan riwayat obat keluar.

---

## Success Response

```json id="p4x8c3"
{
    "success": true,
    "data": [
        {
            "medicine_name": "Paracetamol",
            "quantity": 10,
            "patient_name": "Budi Santoso",
            "date": "2026-05-29"
        }
    ]
}
```

---

# 8. Low Stock Medicines

## Endpoint

```bash id="s7k1q5"
GET /pharmacy/low-stock
```

---

## Description

Menampilkan daftar obat dengan stok menipis.

---

## Success Response

```json id="z3v9m2"
{
    "success": true,
    "data": [
        {
            "name": "Paracetamol",
            "stock": 5
        }
    ]
}
```

---

# Authentication & Role

## Middleware

```bash id="n8q2p1"
auth:sanctum
role:apoteker
```

---

# Notes

- Setiap validasi resep akan mengurangi stok obat secara otomatis.
- Sistem akan memberikan notifikasi jika stok obat hampir habis.
- Riwayat obat keluar disimpan untuk laporan apotek.
