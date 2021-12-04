<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('plans')) {
        Schema::create('plans', function (Blueprint $table) {
            $table->Increments('id');
            $table->foreignId('user_id');
            $table->string('plan_location');
            $table->string('fund');
            $table->string('plan_area');
            $table->string('plan_crop');
            $table->string('introduction');
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
        Schema::dropIfExists('plans');
    }
}
