<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('installment_end_date')->nullable();
            $table->string('installment_start_date')->nullable();
            $table->integer('installment_unit');
            $table->string('invoice')->nullable();
            $table->integer('per_unit_repayment')->nullable();
            $table->string('quotation')->nullable();
            $table->string('select_company_name')->nullable();
            $table->string('installment_duration')->nullable();
            $table->text('services')->nullable();
            $table->integer('total_amount');

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
        Schema::dropIfExists('installments');
    }
}
