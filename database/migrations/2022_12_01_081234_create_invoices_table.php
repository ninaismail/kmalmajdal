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
            $table->increments('id');
            // $table->integer('invoice_no');
            // $table->date('invoice_date');
            // $table->string('title');
            $table->string('client_fname');
            $table->string('client_lname');
            $table->string('client_company');
            $table->string('client_country');
            $table->string('client_city');
            $table->string('client_region');
            $table->string('client_phone');
            $table->string('note');
            $table->string('payment_methode');
            $table->decimal('tax', $precision = 6, $scale = 3);
            $table->decimal('subtotal', $precision = 6, $scale = 3);
            $table->decimal('grandtotal', $precision = 6, $scale = 3);
            // $table->decimal('totalweight', $precision = 6, $scale = 3);
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
