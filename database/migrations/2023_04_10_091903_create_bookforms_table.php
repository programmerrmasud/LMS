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
        Schema::create('bookforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');
            $table->integer('veriphone');
            $table->string('district');
            $table->string('area');
            $table->string('address');
            $table->string('course');
            $table->string('batch');
            $table->string('book');
            $table->string('session');
            $table->string('SubmitTime');
            $table->integer('fee')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookforms');
    }
};
