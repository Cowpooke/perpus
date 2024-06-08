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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id()->unique();
            $table->date('tgl_pinjam')->notNull();
            $table->date('tgl_kembali')->notNull();
            $table->string('status');
            $table->string('user_id');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('user_id')->references('username')->on('users');
            $table->foreign('id_buku')->references('idbuku')->on('bukus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
