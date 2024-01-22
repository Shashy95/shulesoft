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
        if(!Schema::hasTable('orders')){
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->integer('user_id');
            $table->date('invoice_date');
            $table->decimal('invoice_amount', $total = 38, $places = 2);
            $table->decimal('invoice_tax', $total = 38, $places = 2);
            $table->decimal('due_amount', $total = 38, $places = 2);           
            $table->integer('status');
            $table->integer('address');
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
        Schema::dropIfExists('orders');
    }
}
