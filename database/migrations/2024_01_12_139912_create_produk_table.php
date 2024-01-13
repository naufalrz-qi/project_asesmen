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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk', 15)->unique();
            $table->string('nama_produk', 30);
            $table->double('harga_beli');
            $table->double('harga_jual');
            $table->enum('status_produk', ['tunai', 'kredit', 'konsinyasi']);

            // Menambah foreign key untuk kelompok_produk
            $table->unsignedBigInteger('kelompok_produk_id');
            $table->foreign('kelompok_produk_id')->references('id')->on('kelompok_produk');

            $table->integer('stok')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
