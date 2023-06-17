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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('EmployeeID');
            $table->string('LastName',50);
            $table->string('FirstName',50);
            $table->text('Title');
            $table->text('TitleOfCourtesy');
            $table->date('BirthDate');
            $table->date('HirehDate');
            $table->string('Address', 100);
            $table->string('City',50);
            $table->string('Region',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
