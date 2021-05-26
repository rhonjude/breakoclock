<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('snacksandjuice1');
            $table->string('company_address')->default('snacksandjuice1 adres');
            $table->string('company_phone')->default('+91 8078435407');
            $table->string('company_email')->default('snacksandjuice@gmail.com');
            $table->string('company_fax')->default('+91 8787676765');
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
        Schema::dropIfExists('companies');
    }
}
