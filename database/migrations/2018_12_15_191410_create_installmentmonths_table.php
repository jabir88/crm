<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstallmentmonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installmentmonths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('installment_id');
            $table->integer('seleted_month_name')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('status')->nullable();
            $table->integer('balance')->nullable();
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
        Schema::dropIfExists('installmentmonths');
    }
}
