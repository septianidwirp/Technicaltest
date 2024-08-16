<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('Salespersons', function (Blueprint $table) {
        $table->id('SalesPersonID');
        $table->string('SalesPersonName');
        $table->timestamps();
    });
    }

    public function down()
    {
    Schema::dropIfExists('Salespersons');
    }

};
