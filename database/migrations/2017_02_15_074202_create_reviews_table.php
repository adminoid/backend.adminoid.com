<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->string('name')->nullable();
            $table->string('nick')->nullable();
            $table->string('link_to_review')->nullable();
            $table->string('link_to_project')->nullable();
            $table->string('link_to_profile')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('portfolio_work_id')->nullable()->unsigned();
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
        Schema::drop('reviews');
    }
}