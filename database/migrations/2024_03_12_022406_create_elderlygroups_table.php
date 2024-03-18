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
        Schema::create('elderlygroups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('HN');
            $table->integer('sex');
            $table->integer('old');
            $table->string('congenital_disease')->nullable();
            $table->integer('gero')->nullable();
            $table->integer('low_dependence')->nullable();
            $table->string('medium_dependence')->nullable();
            $table->integer('endo')->nullable();
            $table->integer('fillng')->nullable();
            $table->integer('perio')->nullable();
            $table->integer('prosth')->nullable();
            $table->integer('extraction')->nullable();
            $table->integer('year');
            
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elderlygroups');
    }
};
