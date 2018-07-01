<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Request;

class CreateQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('request', function (Blueprint $table) {
        //sender
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('company');
            $table->string('city');
            $table->string('transaction');
            //shipment
            $table->string('contype');
            $table->string('weight');
            $table->string('height'); 
            $table->string('width');
            $table->string('length');
            $table->string('quantity');
            $table->string('commodity');
            //consignee
            $table->string('con_name');
            $table->string('con_add');
            $table->string('con_phone');
            $table->string('con_country');
            $table->string('con_email')->unique();
            $table->timestamps();
        });
    }//edit schema for request quote

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('request');
    }
}
