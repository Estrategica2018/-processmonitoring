<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('total')->nullable();
            $table->date('printer_verification')->nullable();
            $table->date('warehouse_delivery')->nullable();
            $table->integer('total_returns')->nullable();
            $table->integer('books_quantity_ok')->nullable();
            $table->integer('income_corrected')->nullable();
            $table->integer('return_corrected')->nullable();
            $table->integer('refund_refund')->nullable();

            $table->integer('glue_stikers_weave')->nullable();
            $table->integer('Lined')->nullable();
            $table->integer('stick_pocket_barcode')->nullable();
            $table->integer('isolation')->nullable();
            $table->integer('distributor_delivery')->nullable();
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
        Schema::dropIfExists('books');
    }
}
