<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {

            $table->bigIncrements('assignment_id');
            $table->string('assingment_name');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('partner_id');
            $table->foreign('partner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('location_id')->on('locations')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('number_of_employees');
            $table->boolean('is_active');
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
        Schema::dropIfExists('assignments');
    }
}
