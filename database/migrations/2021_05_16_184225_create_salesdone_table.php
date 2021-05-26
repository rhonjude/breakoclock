<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesdoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesdone', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('user_id');
            $table->string('address');
            $table->string('product_name');
            $table->string('description');
            $table->integer('price');
            
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
        Schema::dropIfExists('salesdone');
    }
}
