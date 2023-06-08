<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('types_id');
            $table->string('title');
            $table->string('post_unique_id');
            $table->string('slug', 100)->unique();
            $table->string('thumbs')->nullable();
            $table->text('description')->nullable();
            $table->string('location_id')->nullable();
            $table->string('area')->nullable();
            $table->string('price')->nullable();
            $table->text('property_detail')->nullable();
            $table->boolean('status')->default('0');
            $table->boolean('featured')->default('0');
            $table->string('tag')->nullable();
            $table->string('author')->nullable();
            $table->string('url')->nullable();
            $table->string('order')->nullable()->default(1);
            $table->unsignedInteger('visit_no')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('blogs', function($table){
            $table->foreign('category_id')
                    ->references('id')->on('blog_categories')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                        ->references('id')->on('users')
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
        Schema::dropIfExists('blogs');
    }
}
