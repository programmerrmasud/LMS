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
        Schema::create('bscs', function (Blueprint $table) {
            $table->id();
            $table->string('BscStName');
            $table->text('BscStPhone');
            $table->text('BscStVeriPhone');
            $table->text('BscStCours');
            $table->text('BscStBooks');
            $table->text('BscStDistrict');
            $table->text('BscStArea');
            $table->text('BscStAddress');
            $table->integer('BscStFee')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bscs');
    }
};
