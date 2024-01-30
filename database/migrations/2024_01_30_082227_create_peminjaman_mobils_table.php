<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_mobil', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->dateTime('tgl_mulai', $precision = 0);
            $table->dateTime('tgl_selesai', $precision = 0);
            $table->bigInteger('pengguna_pinjam');
            $table->bigInteger('mobil_pinjam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_mobil');
    }
};
