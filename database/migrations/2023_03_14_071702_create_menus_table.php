<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('type');
            $table->integer('order')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('url');
            $table->string('parameter')->nullable();
            $table->string('target')->default('_self');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('parent_id')
                ->references('id')->on('menus')
                ->onDelete('cascade');
        });

        Schema::create('menus_name', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('menu_id');
            $table->unsignedInteger('lang_id');

            $table->string('name');
            $table->timestamps();
            $table->foreign('menu_id')
                ->references('id')->on('menus')
                ->onDelete('cascade');
            $table->foreign('lang_id')
                ->references('id')->on('languages')
                ->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_name');
        Schema::dropIfExists('menus');
    }
}
