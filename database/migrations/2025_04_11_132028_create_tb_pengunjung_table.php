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
    Schema::create('tb_pengunjung', function (Blueprint $table) {
        $table->id('peng_id');
        $table->string('peng_Email')->unique();
        $table->string('peng_NamaLengkap');
        $table->string('peng_KataSandi');
        $table->string('peng_NomorTelepon')->nullable();
        $table->string('peng_Pekerjaan')->nullable();
        $table->year('peng_TahunLahir')->nullable();
        $table->timestamps();
    });
}

};