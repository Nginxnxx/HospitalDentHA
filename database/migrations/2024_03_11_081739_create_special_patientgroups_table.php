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
        Schema::create('special_patientgroups', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('name');
            $table->string('HN');
            $table->string('phon');
            $table->string('sex');
            $table->string('old');
            $table->string('U/D');
            $table->string('GA');
            $table->string('Filling');
            $table->string('Perio');
            $table->string('Fluoride');
            $table->string('Scaling');
            $table->string('Ext');
            $table->string('OHI');
            $table->string('Sealant');
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
        Schema::dropIfExists('special_patientgroups');
    }
};
