<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('order_payments')){
        Schema::create('order_payments', function (Blueprint $table) {
            $table->id();           
            $table->string('order_id');
            $table->string('paypal_id');
            $table->string('trans_id');
            $table->decimal('amount', $total = 38, $places = 2);
            $table->date('date');
            $table->string('payment_method');
            $table->string('notes')->nullable();               
            $table->integer('added_by');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pos_invoice_payments');
    }
}
