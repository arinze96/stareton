<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNfpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string('firstname',200);
            $table->string('lastname',200);
            $table->string('email')->unique();
            $table->string('phone', 200);
            $table->string('currency',200);
            $table->string('amount',200);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('nfps');
    }
}
