# DOCTOR_API.md

# Doctor API Documentation

## Base URL

```bash id="f9x1n2"
http://localhost:8000/api
```

---

# 1. Get Doctor Schedule

## Endpoint

```bash id="m4p0q8"
GET /doctor/schedule
```

---

## Description

Menampilkan jadwal praktik dokter.

---

## Success Response

```json id="o2w5r6"
{
    "success": true,
    "data": [
        {
            "doctor_name": "Dr. Andi",
            "specialist": "Umum",
            "day": "Senin",
            "time": "08:00 - 12:00"
        }
    ]
}
```

---

# 2. Get Patient Queue

## Endpoint

```bash id="n8v1q3"
GET /doctor/queue
```

---

## Description

Menampilkan antrian pasien dokter.

---

## Success Response

```json id="k5m2x8"
{
    "success": true,
    "data": [
        {
            "queue_number": 1,
            "patient_name": "Budi Santoso",
            "complaint": "Demam"
        }
    ]
}
```

---

# 3. Create Examination

## Endpoint

```bash id="j0r6w4"
POST /doctor/examinations
```

---

## Request Body

```json id="x7f4p2"
{
    "patient_id": 1,
    "complaint": "Demam tinggi",
    "diagnosis": "Influenza",
    "action": "Pemberian obat"
}
```

---

## Success Response

```json id="c3v9k1"
{
    "success": true,
    "message": "Pemeriksaan berhasil disimpan"
}
```

---

# 4. Create Prescription

## Endpoint

```bash id="b1t7z4"
POST /doctor/prescriptions
```

---

## Request Body

```json id="v6w0n3"
{
    "patient_id": 1,
    "medicine": "Paracetamol",
    "dosage": "3x1 sehari"
}
```

---

## Success Response

```json id="h9q4l5"
{
    "success": true,
    "message": "Resep berhasil dibuat"
}
```
