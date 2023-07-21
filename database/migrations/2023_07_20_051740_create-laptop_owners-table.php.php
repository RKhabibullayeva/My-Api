<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('country');
            $table->year('year');
            $table->string('price');
            $table->string('laptop_model');
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
        Schema::dropIfExists('laptop_owners');
    }
}
