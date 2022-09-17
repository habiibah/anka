<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recentbookings', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('quantity');
            $table->string('unitprice');
            $table->string('totalcost');
            $table->string('deliveryaddress');
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
        Schema::dropIfExists('recentbookings');
    }
};
