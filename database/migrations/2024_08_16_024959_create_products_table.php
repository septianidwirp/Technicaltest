<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('Products', function (Blueprint $table) {
        $table->id('ProductID');
        $table->string('ProductName');
        $table->timestamps();
    });
    }

    public function down()
    {
    Schema::dropIfExists('Products');
}
    
};
