<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCategoriaTable extends Migration {

    public function up() {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
        });
    }

    public function down() {
        Schema::dropIfExists('categoria');
    }
}
