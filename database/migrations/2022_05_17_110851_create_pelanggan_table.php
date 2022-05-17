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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan', 25);
            $table->string('notelp_pelanggan', 15);
            $table->string('jenis_kelamin', 15);
            
            $table->unsignedBigInteger('jadwal_id')->nullable();
            $table->unsignedBigInteger('kursi_id')->nullable();
            $table->foreignId('tiket_id')->constrained('tiket')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};
