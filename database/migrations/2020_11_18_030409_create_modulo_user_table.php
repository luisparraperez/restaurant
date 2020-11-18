<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('modulo_id')->nullable();
            $table->enum('activo', ['S', 'N']);
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
        Schema::dropIfExists('modulo_users');
    }
}
