<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('title')->nullable();
            $table->string('time')->nullable();
            $table->string('number')->nullable();
            $table->string('category')->nullable();
            $table->string('level')->nullable();
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('apply_before')->nullable();
            $table->boolean('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
