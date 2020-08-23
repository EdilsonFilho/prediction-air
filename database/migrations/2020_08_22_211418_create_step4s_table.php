<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStep4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step4s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->text('step4_1');
            $table->text('step4_1_1');
            $table->text('step4_2');
            $table->text('step4_2_1');
            $table->text('step4_3');
            $table->text('step4_3_1');
            $table->text('step4_4');
            $table->text('step4_4_1');
            $table->text('step4_5');
            $table->text('step4_5_1');
            $table->text('step4_5_2');
            $table->text('step4_6');
            $table->text('step4_6_1');
            $table->text('step4_7');
            $table->text('step4_7_1');
            $table->text('step4_8');
            $table->text('step4_8_1');
            $table->text('step4_9');
            $table->text('step4_9_1');
            $table->text('step4_10');
            $table->text('step4_10_1');
            $table->text('step4_11');
            $table->text('step4_11_1');
            $table->text('step4_12');
            $table->text('step4_13');
            $table->text('step4_14')->nullable();
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
        Schema::dropIfExists('step4s');
    }
}
