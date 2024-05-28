<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->id('id_akun');
            $table->text('email');
            $table->text('password');
            $table->text('name')->nullable();
            $table->text('username')->nullable();
            $table->string('no_telp', 21)->nullable();
            $table->text('pict')->nullable();
            $table->enum('level_akun', ['1','2']);
            $table->rememberToken('token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('akun');
    }
}
