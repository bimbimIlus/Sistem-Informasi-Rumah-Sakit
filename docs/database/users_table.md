# users_table.md

# Users Table Documentation

## Table Name

```bash id="q8v1m3"
users
```

---

# Description

Tabel users digunakan untuk menyimpan data seluruh pengguna sistem.

Role yang tersedia:

- admin
- dokter
- kasir
- apoteker

---

# Columns

| Column            | Type      | Nullable | Description      |
| ----------------- | --------- | -------- | ---------------- |
| id                | bigint    | no       | Primary key      |
| name              | string    | no       | Nama user        |
| email             | string    | no       | Email user       |
| password          | string    | no       | Password user    |
| role              | enum      | no       | Role user        |
| phone             | string    | yes      | Nomor telepon    |
| address           | text      | yes      | Alamat user      |
| photo             | string    | yes      | Foto profile     |
| email_verified_at | timestamp | yes      | Verifikasi email |
| remember_token    | string    | yes      | Remember token   |
| created_at        | timestamp | yes      | Waktu dibuat     |
| updated_at        | timestamp | yes      | Waktu diupdate   |

---

# Example Migration

```php id="z3k9v5"
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->enum('role', [
        'admin',
        'dokter',
        'kasir',
        'apoteker'
    ]);
    $table->string('phone')->nullable();
    $table->text('address')->nullable();
    $table->string('photo')->nullable();
    $table->timestamp('email_verified_at')->nullable();
    $table->rememberToken();
    $table->timestamps();
});
```

---

# Example Data

```json id="f7m2q1"
{
    "id": 1,
    "name": "Administrator",
    "email": "admin@simrs.com",
    "role": "admin",
    "phone": "08123456789"
}
```

---

# Relationships

## users hasMany examinations

```php id="w5x1n7"
public function examinations()
{
    return $this->hasMany(Examination::class);
}
```

---

## users hasMany prescriptions

```php id="k2q9m4"
public function prescriptions()
{
    return $this->hasMany(Prescription::class);
}
```

---

## users hasMany payments

```php id="t8v3p2"
public function payments()
{
    return $this->hasMany(Payment::class);
}
```

---

# Validation Rules

```php id="n6r8x1"
[
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8',
    'role' => 'required'
]
```

---

# Authentication

Menggunakan:

- Laravel Breeze
- Laravel Sanctum

---

# Notes

- Email harus unik.
- Password menggunakan hashing.
- Role digunakan untuk middleware akses dashboard.
