<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_name');
    $table->enum('property_status',['sell','rent']);
    $table->float('property_price',8,2);
    $table->enum('price_status',['fixed','negotiable']);
    $table->string('country');
    $table->string('address');

    $table->string('province');
    $table->string('district');
    $table->string('city');
    $table->integer('ward_number');
    $table->string('house_number')->nullable();
    $table->integer('zip_code');
    $table->float('property_area');
    $table->integer('number_of_floors');
    $table->integer('number_of_bedrooms');
    $table->integer('number_of_bathrooms');
    $table->float('building_age');
    $table->string('description');
    $table->unsignedBigInteger('user_id');
    $table->enum('gym',['yes','no'])->default('no');
    $table->enum('garden',['yes','no'])->default('no');
    $table->enum('swimming_pool',['yes','no'])->default('no');
    $table->enum('internet',['yes','no'])->default('no');
    $table->enum('parking',['yes','no'])->default('no');
    $table->enum('water',['yes','no'])->default('no');
    $table->enum('school_college_nearby',['yes','no'])->default('no');
    $table->enum('shopping_nearby',['yes','no'])->default('no');
    $table->enum('bank_nearby',['yes','no'])->default('no');
    $table->enum('pitched_road',['yes','no'])->default('no');
    $table->enum('airport_nearby',['yes','no'])->default('no');
    $table->enum('sewage',['yes','no'])->default('no');
    $table->enum('alarm',['yes','no'])->default('no');
    $table->enum('cctv',['yes','no'])->default('no');
    $table->enum('ac',['yes','no'])->default('no');
    $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('real_estates');
    }
}
