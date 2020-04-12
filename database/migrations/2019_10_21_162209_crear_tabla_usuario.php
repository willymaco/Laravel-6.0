<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario', 50)->unique();
            $table->string('password', 100);
            $table->string('nombre', 50);
            // $table->string('email', 100)->unique();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
