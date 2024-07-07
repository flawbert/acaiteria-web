<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndereçosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereços', function (Blueprint $table) {
            $table->id();
            $table ->foreignId("clientes_idCliente") -> constrained();
            $table->String("rua", 45);
            $table->integer("numero");
            $table->String("pontoreferencia", 300);
            $table->String("bairro", 45);
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
        Schema::dropIfExists('endereços');
    }
}
