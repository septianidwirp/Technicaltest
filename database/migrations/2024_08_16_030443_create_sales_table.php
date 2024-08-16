<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('Sales', function (Blueprint $table) {
        $table->id('SalesID');
        $table->date('SalesDate');
        $table->unsignedBigInteger('ProductID');
        $table->decimal('SalesAmount', 8, 2);
        $table->unsignedBigInteger('SalesPersonID');
        $table->timestamps();

        $table->foreign('ProductID')->references('ProductID')->on('Products');
        $table->foreign('SalesPersonID')->references('SalesPersonID')->on('Salespersons');
    });
    }

    public function down()
    {
    Schema::dropIfExists('Sales');
    }

};
