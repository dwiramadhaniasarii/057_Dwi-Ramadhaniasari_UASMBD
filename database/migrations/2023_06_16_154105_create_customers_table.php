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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('CustomersID');
            $table->string('CompanyName',60);
            $table->string('ContactName',60);
            $table->string('ContactTitle',50);
            $table->string('Address',100);
            $table->string('City',50);
            $table->string('Region',30);
            $table->char('PostalCode',5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
