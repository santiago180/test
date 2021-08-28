<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('nombre de la compañia');
            $table->string('nit')->nullable()->comment('nit de la compañia');
            $table->string('phone')->nullable()->comment('telefono de la compañia');
            $table->string('addres')->nullable()->comment('direccion de la compañia');
            $table->string('email')->nullable()->comment('correo de la compañia')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
