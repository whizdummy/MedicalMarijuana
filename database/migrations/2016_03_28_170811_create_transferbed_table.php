<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferbedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblTransferBed', function(Blueprint $table){
            $table->increments('intTransferBedId');
            $table->integer('intEmployeeIdFK')
                ->unsigned();
            $table->integer('intPatientIdFK')
                ->unsigned();
            $table->integer('intBedFromIdFK')
                ->unsigned();
            $table->integer('intBedToIdFK')
                ->unsigned();
            $table->integer('intTransferBedStatusIdFK')
                ->unsigned();
            $table->text('txtRemarks');
            $table->timestamps();

            $table->foreign('intEmployeeIdFK')
                ->references('intEmployeeId')
                ->on('tblEmployee')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('intPatientIdFK')
                ->references('intPatientId')
                ->on('tblPatient')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('intBedFromIdFK')
                ->references('intBedId')
                ->on('tblBed')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('intBedToIdFK')
                ->references('intBedId')
                ->on('tblBed')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('intTransferBedStatusIdFK')
                ->references('intStatusId')
                ->on('tblStatus')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblTransferBed');
    }
}
