<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('freelancer_id');
            $table->longText('letterToClient');
            $table->unsignedBigInteger('job_id');
            $table->longText('experienceDescription');
            $table->integer('min_payment')->nullabel();
            $table->integer('max_payment'); //Use this if it is hourly payment
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('freelancer_id')->references('id')->on('freelancers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
