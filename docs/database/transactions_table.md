# transactions_table.md

# Transactions Table Documentation

## Table Name

```bash id="x4m8v2"
transactions
```

---

# Description

Tabel transactions digunakan untuk menyimpan data transaksi pembayaran pasien.

---

# Columns

| Column         | Type      | Nullable | Description        |
| -------------- | --------- | -------- | ------------------ |
| id             | bigint    | no       | Primary key        |
| invoice_number | string    | no       | Nomor invoice      |
| patient_id     | bigint    | no       | ID pasien          |
| cashier_id     | bigint    | no       | ID kasir           |
| doctor_fee     | integer   | no       | Biaya dokter       |
| medicine_fee   | integer   | no       | Biaya obat         |
| total_amount   | integer   | no       | Total pembayaran   |
| payment_method | string    | no       | Metode pembayaran  |
| payment_status | enum      | no       | Status pembayaran  |
| payment_date   | datetime  | yes      | Tanggal pembayaran |
| created_at     | timestamp | yes      | Waktu dibuat       |
| updated_at     | timestamp | yes      | Waktu diupdate     |

---

# Example Migration

```php id="m1q7x5"
Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->string('invoice_number')->unique();

    $table->foreignId('patient_id')
        ->constrained('patients')
        ->onDelete('cascade');

    $table->foreignId('cashier_id')
        ->constrained('users')
        ->onDelete('cascade');

    $table->integer('doctor_fee');
    $table->integer('medicine_fee');
    $table->integer('total_amount');

    $table->string('payment_method');

    $table->enum('payment_status', [
        'paid',
        'unpaid'
    ]);

    $table->dateTime('payment_date')->nullable();

    $table->timestamps();
});
```

---

# Example Data

```json id="v9k3m2"
{
    "id": 1,
    "invoice_number": "INV-001",
    "patient_id": 1,
    "cashier_id": 3,
    "doctor_fee": 100000,
    "medicine_fee": 50000,
    "total_amount": 150000,
    "payment_method": "cash",
    "payment_status": "paid"
}
```

---

# Relationships

## transactions belongsTo patients

```php id="p2x7q8"
public function patient()
{
    return $this->belongsTo(Patient::class);
}
```

---

## transactions belongsTo users

```php id="n5v1m4"
public function cashier()
{
    return $this->belongsTo(User::class, 'cashier_id');
}
```

---

# Validation Rules

```php id="q4m8x6"
[
    'patient_id' => 'required',
    'cashier_id' => 'required',
    'doctor_fee' => 'required|numeric',
    'medicine_fee' => 'required|numeric',
    'payment_method' => 'required'
]
```

---

# Payment Status

| Status | Description      |
| ------ | ---------------- |
| paid   | Pembayaran lunas |
| unpaid | Belum dibayar    |

---

# Notes

- invoice_number harus unik.
- total_amount berasal dari:
    - doctor_fee
    - medicine_fee

- Data transaksi digunakan untuk:
    - laporan
    - dashboard kasir
    - riwayat pembayaran
