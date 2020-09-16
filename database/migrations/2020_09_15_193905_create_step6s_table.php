<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStep6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step6s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->text('step6_1');
            $table->text('step6_2');
            $table->text('step6_3');
            $table->text('step6_4');
            $table->text('step6_5');
            $table->text('step6_6');
            $table->text('step6_7');
            $table->text('step6_8');
            $table->text('step6_9');
            $table->text('step6_10');
            $table->timestamps();

            $table->foreign('survey_id')
                ->references('id')->on('surveys')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('step6s');
    }
}
