<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeteoblongsTable extends Migration
{
    public function up()
    {
        Schema::create('meteoblongs', function (Blueprint $table) {
            $table->id(); // auto increment primary key
            $table->string('customer');
            $table->string('product');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->date('order_date');
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('meteoblongs');
    }
}
