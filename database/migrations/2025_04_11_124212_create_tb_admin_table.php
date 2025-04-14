<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAdminTable extends Migration
{
    public function up()
    {
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->id('admin_id'); // Auto-increment primary key
            $table->string('admin_nama')->unique(); // Nama admin, unik
            $table->string('admin_password'); // Password yang di-hash
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_admin');
    }
}