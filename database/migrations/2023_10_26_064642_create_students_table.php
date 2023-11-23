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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('no_ponsel')->unique();
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('kode_kelas');
            $table->string('minat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
