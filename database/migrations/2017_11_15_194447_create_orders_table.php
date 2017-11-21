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
            $table->string('name', '100');
            $table->string('phone', '100');
            $table->string('email', '100')->nullable();
            $table->text('adress');
            $table->integer('product_id');
            $table->integer('status_id')->default(0);

            /*nullable -о умолчанию
            default(0) -по умолчанию
             *
             *
             *
             */
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
