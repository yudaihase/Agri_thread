<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('farms')) { 
        Schema::create('farms', function (Blueprint $table) {
            $table->Increments('id');
            $table->foreignId('user_id');
            $table->string('farm_name');
            $table->string('farm_link')->nullable();
            $table->string('farm_area');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farms');
    }
}
