<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('amount');
            $table->string('totalData');
            $table->string('starting_image_save');
            $table->string('desired_image_save');
            $table->string('member_starting_rank');
            $table->string('member_desired_rank');
            $table->string('mode_statue');
            $table->string('wins_price');
            $table->string('winstotalData');
            $table->string('wins_mode_statue');
            $table->string('payment_id');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
