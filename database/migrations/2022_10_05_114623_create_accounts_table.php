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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_name');
            $table->string('savings_skim')->nullable();
            $table->string('loan_skim')->nullable();
            $table->string('profit_loan')->nullable();
            $table->string('saving_status')->nullable();
            $table->string('loan_status')->nullable();
            $table->string('start_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('installment')->nullable();
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
        Schema::dropIfExists('accounts');
    }
};
