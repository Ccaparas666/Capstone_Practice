<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grades', function (Blueprint $table) {
            $table->id('gNo');
            $table->unsignedBigInteger('esNo');
            $table->unsignedBigInteger('sNo');
            $table->decimal('prelim', $precision = 3, $scale = 2);
            $table->decimal('midterm', $precision = 3, $scale = 2);
            $table->decimal('finals', $precision = 3, $scale = 2);
            $table->string('remarks',4);
            $table->timestamps();
            $table->foreign('esNo')->references('esNo')->on('enrolledsubjects');
            $table->foreign('sNo')->references('sNo')->on('studentinfo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Grades');
    }
};
