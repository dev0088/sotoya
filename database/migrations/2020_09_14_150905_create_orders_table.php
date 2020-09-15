<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("join_id");
            $table->unsignedBigInteger("material_id");
            $table->unsignedBigInteger("range_id");
            $table->unsignedBigInteger("opening_id");
            $table->unsignedBigInteger("leave_id");
            $table->unsignedBigInteger("installation_id");
            $table->unsignedBigInteger("totalheight_id");
            $table->unsignedBigInteger("totalwidth_id");
            $table->unsignedBigInteger("insulation_id");
            $table->unsignedBigInteger("aeration_id");
            $table->unsignedBigInteger("glazing_id");
            $table->string("mode");
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
        Schema::dropIfExists('orders');
    }
}
