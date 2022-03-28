<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilityrooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_id')->unsigned();
            $table->string('facility1')->nullable();
            $table->string('facility2')->nullable();
            $table->string('facility3')->nullable();
            $table->string('facility4')->nullable();
            $table->string('facility5')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
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
        Schema::dropIfExists('facilityrooms');
    }
}
