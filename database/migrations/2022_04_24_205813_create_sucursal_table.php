<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSucursalTable extends Migration {

    public function up() {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('direccion', 100)->nullable();
            $table->integer('comuna_id')->nullable()->unsigned();
            $table->string('telefono', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->foreign('comuna_id')->references('id')->on('comuna');
        });
    }

    public function down() {
        Schema::table('comuna', function (Blueprint $table) {
            $table->dropForeign(['comuna_id']);
        });
        Schema::dropIfExists('sucursal');
    }
}
