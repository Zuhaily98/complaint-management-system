<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('guest_id');
            // $table->foreign('guest_id')->references('id')->on('guests');

            $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('panel_id');    
            // $table->foreign('panel_id')->references('id')->on('panels');

            $table->text('detail');
            $table->integer('priority');
            $table->integer('status');
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
        Schema::dropIfExists('complaints');
    }
}
