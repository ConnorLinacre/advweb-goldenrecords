<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDatesTable extends Migration
{
    /**
     * Tourdate parameters for SQL
     */
    public function up()
    {
        Schema::create('tour_dates', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->date("start_date");
            $table->date("end_date");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tour_dates');
    }
}
