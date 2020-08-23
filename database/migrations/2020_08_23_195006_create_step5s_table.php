<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStep5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step5s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_id');
            $table->text('step5_1');
            $table->text('step5_2');
            $table->text('step5_3');
            $table->text('step5_4');
            $table->text('step5_5');
            $table->text('step5_6');
            $table->text('step5_7');
            $table->text('step5_8');
            $table->text('step5_9');
            $table->text('step5_10');
            $table->text('step5_11');
            $table->text('step5_12');
            $table->text('step5_13');
            $table->text('step5_14');
            $table->text('step5_15');
            $table->text('step5_16');
            $table->text('step5_17');
            $table->text('step5_18');
            $table->text('step5_19');
            $table->text('step5_20');
            $table->text('step5_21');
            $table->text('step5_22');
            $table->text('step5_23');
            $table->text('step5_24');
            $table->text('step5_25');
            $table->text('step5_26');
            $table->text('step5_27');
            $table->text('step5_28');
            $table->text('step5_29');
            $table->text('step5_30');
            $table->text('step5_31');
            $table->text('step5_32');
            $table->text('step5_33');
            $table->text('step5_34');
            $table->text('step5_35');
            $table->text('step5_36');
            $table->text('step5_37');
            $table->text('step5_38');
            $table->text('step5_39');
            $table->text('step5_40');
            $table->text('step5_41');
            $table->text('step5_42');
            $table->text('step5_43');
            $table->text('step5_44');
            $table->text('step5_45');
            $table->text('step5_46');
            $table->text('step5_47');
            $table->text('step5_48');
            $table->text('step5_49');
            $table->text('step5_50');
            $table->text('step5_51');
            $table->text('step5_52');
            $table->text('step5_53');
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
        Schema::dropIfExists('step5s');
    }
}
