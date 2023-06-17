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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('OrderID');
            $table->bigIncrements('CustomersID')->unsigned();
            $table->bigIncrements('EmployeeID')->unsigned();
            $table->date('OrderDate');
            $table->date('RequiredDate');
            $table->date('ShippedDate');
            $table->bigInteger('ShipperID')->unsigned();
            $table->string('ShipVia',60);
            $table->enum('Freight',['Air','Ocean','Ground','Multimodal']);
            $table->enum('ShipName',['Standard','Express']);
            $table->string('ShipAddress',100);
            $table->string('ShipCity',50);
            $table->string('ShipRegion',30);
            $table->char('ShipPostalCode',5);
            $table->string('ShipCountry',50);
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table){
            $table->foreign('EmployeeID')->references('EmployeeID')->on('Employees')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('CustomerID')->references('CustomerID')->on('Customers')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ShipperID')->references('ShipperID')->on('Shippers')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
