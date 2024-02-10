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
        Schema::create('newtable', function (Blueprint $table) {
            $table->string("id");
            $table->string("link");
            $table->string("menu");
            $table->timestamp('date')->nullable();
        });//
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newtable');//
    }
};
