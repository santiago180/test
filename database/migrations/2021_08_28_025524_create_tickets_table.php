<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('history_id')->comment('historia asociado al ticket');
            $table->string('task')->nullable()->comment('tarea del ticket');
            $table->integer('state_id')->comment('Estado del ticket. 1. Activo, 2.  En Proceso, 3. Finalizado')->default(1);
            $table->text('comments')->nullable()->comment('Comentarios del ticket');
            
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('history_id')->references('id')->on('histories');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
