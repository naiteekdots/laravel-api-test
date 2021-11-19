<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('name',45);
            $table->enum('rating', [1, 2, 3, 4, 5])->index('rating');
            $table->enum('supplier', ['Admin', 'Hotelbeds','SunHotels'])->index();
            $table->enum('status', ['Active', 'Inactive'])->index();
            $table->text('address');
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
        Schema::dropIfExists('hotels');
    }
}
