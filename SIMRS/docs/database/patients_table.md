# patients_table.md

# Patients Table Documentation

## Table Name

```bash id="r8v3x1"
patients
```

---

# Description

Tabel patients digunakan untuk menyimpan data pasien rumah sakit.

---

# Columns

| Column     | Type      | Nullable | Description              |
| ---------- | --------- | -------- | ------------------------ |
| id         | bigint    | no       | Primary key              |
| no_rm      | string    | no       | Nomor rekam medis pasien |
| name       | string    | no       | Nama pasien              |
| gender     | enum      | no       | Jenis kelamin            |
| birth_date | date      | no       | Tanggal lahir            |
| phone      | string    | no       | Nomor telepon            |
| address    | text      | no       | Alamat pasien            |
| photo      | string    | yes      | Foto pasien              |
| created_at | timestamp | yes      | Waktu dibuat             |
| updated_at | timestamp | yes      | Waktu diupdate           |

---

# Example Migration

```php id="q4k9m2"
Schema::create('patients', function (Blueprint $table) {
    $table->id();
    $table->string('no_rm')->unique();
    $table->string('name');
    $table->enum('gender', ['Laki-laki', 'Perempuan']);
    $table->date('birth_date');
    $table->string('phone');
    $table->text('address');
    $table->string('photo')->nullable();
    $table->timestamps();
});
```

---

# Example Data

```json id="u7x5p1"
{
    "id": 1,
    "no_rm": "RM001",
    "name": "Budi Santoso",
    "gender": "Laki-laki",
    "birth_date": "2000-01-10",
    "phone": "08123456789",
    "address": "Yogyakarta"
}
```

---

# Relationships

## patients hasMany examinations

```php id="k2v8m4"
public function examinations()
{
    return $this->hasMany(Examination::class);
}
```

---

## patients hasMany prescriptions

```php id="g9q1x3"
public function prescriptions()
{
    return $this->hasMany(Prescription::class);
}
```

---

## patients hasMany payments

```php id="n5m7p2"
public function payments()
{
    return $this->hasMany(Payment::class);
}
```

---

# Validation Rules

```php id="w8r4k6"
[
    'name' => 'required|string|max:255',
    'gender' => 'required',
    'birth_date' => 'required|date',
    'phone' => 'required',
    'address' => 'required'
]
```

---

# Notes

- no_rm harus unik.
- Foto pasien bersifat optional.
- Data pasien digunakan pada:
    - pemeriksaan
    - resep
    - pembayaran
