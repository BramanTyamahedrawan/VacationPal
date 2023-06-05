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
            $table->id()->autoIncrement()->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_hp');
            $table->date('tanggal_kedatangan');
            $table->string('jumlah_tiket');
            $table->string('harga');
            $table->timestamps();
        });

        Schema::table('user_tikets', function (Blueprint $table) {
            $table->string('status')->nullable()->after('harga')->default('Belum Lunas');
            $table->string('batal')->nullable()->after('status')->default('Batalkan');
            $table->foreignId('email')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
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
