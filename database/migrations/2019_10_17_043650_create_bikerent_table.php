<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikerentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikerent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufacturer');
            $table->string('type');
            $table->string('model');
            $table->string('image');
            $table->text('specification'); // json
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
        Schema::dropIfExists('bikerent');
    }
}
