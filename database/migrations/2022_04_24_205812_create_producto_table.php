<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductoTable extends Migration {

    public function up() {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 100);
            $table->string('nombre', 100);
            $table->string('descripcion', 255);
            $table->integer('categoria_id')->nullable()->unsigned();
            $table->boolean('activo');
            $table->foreign('categoria_id')->references('id')->on('categoria');
        });
    }

    public function down() {
        Schema::table('categoria', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });
        Schema::dropIfExists('producto');
    }
}
