<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('displacement');
            $table->integer('max_speed');
            $table->timestamps();
        });

        DB::table('cars')->insert([

          "brand" => "Ford",
          "model" => "Focus",
          "displacement" => 1400,
          "max_speed" => 200
        ]);
        DB::table('cars')->insert([

          "brand" => "Fiat",
          "model" => "Panda",
          "displacement" => 1400,
          "max_speed" => 200
        ]);
        DB::table('cars')->insert([

          "brand" => "Fiat",
          "model" => "Uno",
          "displacement" => 1400,
          "max_speed" => 200
        ]);
        DB::table('cars')->insert([

          "brand" => "Ford",
          "model" => "Fiesta",
          "displacement" => 1400,
          "max_speed" => 200
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
