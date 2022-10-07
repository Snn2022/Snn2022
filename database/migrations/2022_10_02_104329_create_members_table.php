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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('spouse_name');
            $table->string('nid_number');
            $table->string('dob');
            $table->string('village');
            $table->string('post');
            $table->string('union');
            $table->string('thana');
            $table->string('district');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('nid_photo')->nullable();                     
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
        Schema::dropIfExists('members');
    }
};
