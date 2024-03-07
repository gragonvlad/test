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
     Schema::create('urls', function (Blueprint $table) {
		 $table->integer('id')->unsigned();
		 $table->string('href');
		 $table->string('page');
		 $table->timestamps();
        $table->integer('express_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urls');//
    }
};
