<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // Nomor Rekam Medis
            $table->string('no_rm')->unique();

            // Nomor Induk Kependudukan
            $table->string('nik')->unique();

            // Data pasien
            $table->string('name');
            $table->enum('gender', ['L', 'P']);

            $table->date('birth_date');

            $table->string('phone')->nullable();

            $table->text('address');

            $table->enum('blood_type', [
                'A',
                'B',
                'AB',
                'O'
            ])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
