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
        Schema::create('pemesanans_migration', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemesanan',100);
            $table->string('id_pelanggan',100);
            $table->date('tgl_pemesanan',50);
            $table->string('id_barang',100);
            $table->string('jumlah',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans_migration');
    }
};
