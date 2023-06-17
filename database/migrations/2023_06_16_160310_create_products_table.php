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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('ProductID');
            $table->string('ProductName', 60);
            $table->bigInteger('SupplierID')->unsigned();
            $table->bigInteger('CategoryID')->unsigned();
            $table->smallInteger('QuantityPerUnit');
            $table->float('UnitPrice');
            $table->smallInteger('UnitInStock');
            $table->smallInteger('UnitOnOrder');
            $table->Integer('ReorderLevel');
            $table->smallInteger('Discontinued');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table){
            $table->foreign('SupplierID')->references('SupplierID')->on('Suppliers')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('CategoryID')->references('CategoryID')->on('Categories')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
