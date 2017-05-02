<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKantorenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantoren', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('postalcode');
            $table->string('city');
            $table->string('province');
            $table->string('phone');
            $table->string('fax');
            $table->string('morning_open_from');
            $table->string('morning_open_till');
            $table->string('afternoon_open_from');
            $table->string('afternoon_open_till');
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
        Schema::drop('kantoren');
    }
}
