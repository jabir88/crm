<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('customer_name');
            $table->string('contact');
            $table->string('email')->unique()->nullable();
            $table->string('domain')->nullable();
            $table->string('cpanel_link')->nullable();
            $table->string('cpanel_id')->nullable();
            $table->string('cpanel_password')->nullable();
            $table->string('website_link')->nullable();
            $table->string('website_id')->nullable();
            $table->string('website_password')->nullable();
            $table->text('services_type')->nullable();
            $table->integer('email_hosting_month')->nullable();
            $table->string('hosting_start_date')->nullable();
            $table->string('hosting_end_date')->nullable();
            $table->integer('seo_month')->nullable();
            $table->string('seo_start_date')->nullable();
            $table->string('seo_end_date')->nullable();
            $table->string('files')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
