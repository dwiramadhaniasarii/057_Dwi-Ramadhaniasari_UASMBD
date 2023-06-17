<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->bigInteger('OrderID')->unsigned();
            $table->bigInteger('ProductID')->unsigned();
            $table->float('UnitPrice');
            $table->smallInteger('Quantity');
            $table->float('Discount');
            $table->timestamps();
        });
        Schema::table('orderdetails', function (Blueprint $table){
            $table->primary('OrderID')->references('OrderID')->on('Orders')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ProductID')->references('ProductID')->on('Products')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
