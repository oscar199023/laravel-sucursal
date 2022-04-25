<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSucursalProductoTable extends Migration {

    public function up() {
        Schema::create('sucursal_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal_id')->nullable()->unsigned();
            $table->integer('producto_id')->nullable()->unsigned();
            $table->integer('precio');
            $table->integer('stock');
            $table->foreign('sucursal_id')->references('id')->on('sucursal');
            $table->foreign('producto_id')->references('id')->on('producto');
        });
    }

    public function down() {
        Schema::table('sucursal', function (Blueprint $table) {
            $table->dropForeign(['sucursal_id']);
        });
        Schema::table('producto', function (Blueprint $table) {
            $table->dropForeign(['producto_id']);
        });
        Schema::dropIfExists('sucursal_producto');
    }
}
