<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHirepurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hirepurchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hire_purchase_name');
            $table->string('hire_purchase_percentage');
            $table->string('hire_purchase_payment_duration');
            $table->string('hire_purchase_percentage_principle');
            $table->string('hire_purchase_min_price');
            $table->string('hire_purchase_max_price');
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
        Schema::dropIfExists('hirepurchases');
    }
}
