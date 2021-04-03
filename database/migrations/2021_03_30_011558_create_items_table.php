<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('sort_no');
            $table->timestamps();
        });

        Schema::create('secondary_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('primary_category_id');
            $table->string('name');
            $table->integer('sort_no');
            $table->timestamps();

            $table->foreign('primary_category_id')->references('id')->on('primary_categories');
        });

        Schema::create('items', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('secondary_category_id');
            $table->string('title');
            $table->string('image_file_name');
            // $table->integer('category');
            $table->bigInteger('take_time');
            $table->bigInteger('capacity');
            $table->text('description');
            $table->bigInteger('user_id');


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('secondary_category_id')
                ->references('id')->on('secondary_categories');

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
        Schema::dropIfExists('items');
        Schema::dropIfExists('secondary_categories');
        Schema::dropIfExists('primary_categories');
    }
}
