<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('slug');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('billing_name')->nullable();
            $table->string('billing_email');
            $table->string('billing_title')->nullable();
            $table->string('billing_address1');
            $table->string('billing_address2')->nullable();
            $table->string('billing_postal');
            $table->string('billing_country')->default('Nepal');
            $table->string('billing_province');
            $table->string('billing_sub_total');
            $table->string('billing_tax');
            $table->string('billing_total');
            $table->string('billing_district');
            $table->string('billing_phone');
            $table->string('billing_mobile')->nullable();
            $table->string('billing_password')->default('Password');
            $table->text('shipping_order_details')->nullable();
            $table->string('shipped')->default('false');
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
