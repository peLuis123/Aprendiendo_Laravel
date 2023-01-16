<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //string te devuelve un varchar de maximo 250 caracteres en caso que quieras menos caracteres
                                    // solamente deverias de poner ('name', numero de caracteres que deseas)
            $table->text('description');//text te ayuda a poner mas de 250 caracteres 
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
        Schema::dropIfExists('cursos');
    }
};
