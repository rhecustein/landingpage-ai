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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->foreign('respon_id')->references('id')->on('respons')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('url')->nullable();
            $table->string('desc')->nullable();
            $table->string('prince')->nullable();
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
        Schema::dropIfExists('history');
    }
};
