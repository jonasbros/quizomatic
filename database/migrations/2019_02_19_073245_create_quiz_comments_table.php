<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('quiz_id');
            $table->text('body');
            $table->integer('likes')->default('0');
            $table->smallInteger('deleted')->default('0');
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
        Schema::dropIfExists('quiz_comments');
    }
}
