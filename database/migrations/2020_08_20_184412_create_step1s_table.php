<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStep1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step1s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->date('fill_date');
            $table->text('step1_1');
            $table->text('step1_2');
            $table->text('step1_3');
            $table->text('step1_4');
            $table->text('step1_5');
            $table->text('step1_6');
            $table->text('step1_7');
            $table->text('step1_8');
            $table->text('step1_9');
            $table->text('step1_10');
            $table->text('step1_11');
            $table->text('step1_12');
            $table->text('step1_13');
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
        Schema::dropIfExists('step1s');
    }
}
