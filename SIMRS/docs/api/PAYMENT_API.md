# PAYMENT_API.md

# Payment API Documentation

## Base URL

```bash id="n5x2p7"
http://localhost:8000/api
```

---

# 1. Get Patient Bill

## Endpoint

```bash id="m8v3c1"
GET /payments/{patient_id}
```

---

## Description

Mengambil total tagihan pasien.

---

## Success Response

```json id="t1z9q8"
{
    "success": true,
    "data": {
        "patient_name": "Budi Santoso",
        "doctor_fee": 100000,
        "medicine_fee": 50000,
        "total": 150000,
        "status": "unpaid"
    }
}
```

---

# 2. Create Payment

## Endpoint

```bash id="d3k7p1"
POST /payments
```

---

## Request Body

```json id="q6r0v9"
{
    "patient_id": 1,
    "payment_method": "cash",
    "total_paid": 150000
}
```

---

## Success Response

```json id="w2f8n6"
{
    "success": true,
    "message": "Pembayaran berhasil"
}
```

---

# 3. Get Payment History

## Endpoint

```bash id="s9j4x2"
GET /payments/history
```

---

## Description

Menampilkan riwayat pembayaran pasien.

---

## Success Response

```json id="u0m5r7"
{
    "success": true,
    "data": [
        {
            "invoice_number": "INV-001",
            "patient_name": "Budi Santoso",
            "total": 150000,
            "status": "paid",
            "payment_date": "2026-05-29"
        }
    ]
}
```

---

# 4. Print Invoice

## Endpoint

```bash id="p8v2n1"
GET /payments/invoice/{id}
```

---

## Description

Generate dan cetak invoice pembayaran pasien.

---

## Success Response

```json id="g1x7q4"
{
    "success": true,
    "message": "Invoice berhasil dibuat"
}
```
