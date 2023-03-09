<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buypackages', function (Blueprint $table) {
            $table->id();
            $table->string('transactionId')->unique();
            $table->string('userId');
            $table->string('username');
            $table->string('email');
            $table->string('amount');
            $table->string('package');
            $table->string('status');
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
        Schema::dropIfExists('buypackages');
    }
};
