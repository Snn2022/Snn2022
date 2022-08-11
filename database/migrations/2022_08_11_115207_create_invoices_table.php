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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique();
            $table->string('reservationdate')->nullable();
            $table->string('check_in_date')->nullable();
            $table->string('check_out_date')->nullable();
            $table->string('no_of_days')->nullable();
            $table->string('income_total')->nullable();
            $table->string('room_type')->nullable();
            $table->string('bookingSource_name')->nullable();
            $table->string('incomeSource_name')->nullable();
            $table->string('payment')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('room_name')->nullable();
            $table->string('number_of_room')->nullable();
            $table->string('number_of_days')->nullable();
            $table->string('room_rate')->nullable();
            $table->string('total_room_rate')->nullable();
            $table->string('gst')->nullable();          
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
        Schema::dropIfExists('invoices');
    }
};
