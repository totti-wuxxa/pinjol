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
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->date('tgl_pinjam');
            $table->integer('jumlah_pinjam');
            $table->date('jangka_waktu');
            $table->uuid('orang_id');
            $table->foreign('orang_id')->references('id')->on('orangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamen');
    }
};
