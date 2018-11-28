<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');

            $table->string('title');
            $table->integer('price');
            $table->integer('size_land');
            $table->integer('floor_number')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('apart_number')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('kitchens')->nullable();
            $table->integer('livingrooms')->nullable();
            $table->integer('garages')->nullable();

            $table->integer('position')->unsigned();
            $table->foreign('position')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');

            $table->integer('cat')->unsigned();
            $table->foreign('cat')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');

            $table->integer('cat_business')->unsigned();
            $table->foreign('cat_business')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');

            $table->integer('cat_land')->unsigned()->nullable();
            $table->foreign('cat_land')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');

            $table->integer('cat_roof')->unsigned()->nullable();
            $table->foreign('cat_roof')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');




              

            //$table->string('currency')->default('$');
            $table->text('disc')->nullable();
            //$table->integer('quantity')->default(1);


            $table->integer('vue')->default(0);


            $table->boolean('status')->default( false );

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
        Schema::dropIfExists('ads');
    }
}
