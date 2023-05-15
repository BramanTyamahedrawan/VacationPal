<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_hp');
            $table->timestamp('tanggal_kedatangan');
            $table->string('harga');

            $table->foreign('email')->references('email')->on('users');
            $table->timestamps();
        });

        Schema::table('user_tikets', function (Blueprint $table) {
            $table->string('status')->nullable()->after('harga')->default('Belum Lunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tikets');
    }
};